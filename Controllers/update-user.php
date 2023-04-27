<?php
session_start();
if(!isset($_SESSION['USER'])) exit();
require "../utils/database.php";
require "../Models/user.php";

$user = json_decode($_SESSION['USER']);
$user = (new User($db))->setid($user->id)->setpassword($user->password)->setusername($user->username)->setemail($user->email)->setfirstname($user->firstname)->setlastname($user->lastname);

if(!isset($_POST['late-password']) || !isset($_POST['new-password'])){
    echo json_encode(["ERROR" => "missing params"]);    
    exit();
}


if($_POST['late-password'] == $user->password){
    $user->setpassword($_POST['new-password']);
    if($user->save()){
        $_SESSION['USER'] = json_encode($user);
        header("Location: ../Views/main.php");
    };
}else{
    header("Location: ../Views/update-user.php?password=false");
}



