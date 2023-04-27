<?php


require "../utils/database.php";
require "../Models/user.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    try{
        login($_POST['email'], $_POST['password']);
    }catch(Exception $e){
        die($e);
    }
}else{
    echo "manque des champs";
}

function login(string $email, string $password){
    global $db;
    //on retire tout les caractères spéciaux qui pourraient mener à une injection sql
    $email = htmlspecialchars(strip_tags($email));
    $password = htmlspecialchars(strip_tags($password));

    $user = (new User($db))
    ->setemail($email)
    ->setpassword($password);


    $user = $user->load();
    
    if($user === null){
        header('Location: ../Views/login.php?unknowUser');
    }else if(!$user){
        header('Location: ../Views/login.php?wrongPass');
    }else{
        session_start();
        $_SESSION['USER'] = json_encode($user);
        header('Location: ../Views/main.php');
        
    }
    

}
