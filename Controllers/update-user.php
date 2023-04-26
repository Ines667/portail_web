<?php
session_start();
if(!isset($_SESSION['USER'])) exit();
require "../utils/database.php";
require "../Models/user.php";

$user = json_decode($_SESSION['USER']);
$user = (new User($db))->setId($user->id)->setRole($user->role)->setPassword_hash($user->password_hash)->setUsername($user->username)->setEmail($user->email)->setFirstName($user->firstName)->setLastName($user->lastName);

if(!isset($_POST['USER_ID']) || !isset($_POST['lastname']) || !isset($_POST['firstname']) || !isset($_POST['username'])){
    echo json_encode(["ERROR" => "missing params"]);    
    exit();
}
if(($user->id != $_POST['USER_ID'] && $user->role !== 'ADMIN')){
    echo json_encode(["ERROR"=>"vous ne pouvez pas modifier un autre utilisateur que le votre !"]);
    exit();
}

if(isset($_POST['password'])){
    $user->setPassword_hash(password_hash($_POST['password'], PASSWORD_DEFAULT));
}else{
    $user->setUsername($_POST['username'])
    ->setEmail($_POST['mail'])
    ->setFirstName($_POST['firstname'])
    ->setLastName($_POST['lastname']);
}



if($user->save()){
    $_SESSION['USER'] = json_encode($user);

    if($user->role == 'ADMIN' && $user->id != $_POST['USER_ID']){
        header('Location: /Views/admin.php');
        exit();
    }
    
    header("Location: /Views/myAccount.php");
}

