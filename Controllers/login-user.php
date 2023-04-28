<?php


require "../Utils/database.php";
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

    $users = (new users($db))
    ->setemail($email)
    ->setpassword($password);


    $users = $users->load();
    
    if($users === null){
        header('Location: ../index.php?unknowusers');
    }else if(!$users){
        header('Location: ../index.php?password=false');
    }else{
        session_start();
        $_SESSION['users'] = json_encode($users);
        header('Location: ../Views/main.php');
        
    }
    

}
