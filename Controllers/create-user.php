<?php
require "../utils/database.php";
require "../Models/user.php";

if (!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    try{
        $user = createUser($_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], gen_uuid());
        if($user){
            header('Location: ../index.php');
        } 
        else header('Location: ./Views/create.php?error');
    }catch(Exception $e){
        die($e);
    }
}else{
    echo "manque des champs";
}

function createUser(string $username, string $firstName, string $lastName, string $email, string $password){
    global $db;
    //on retire tout les caractères spéciaux qui pourraient mener à une injection sql
    $username = htmlspecialchars(strip_tags($username));
    $firstName = htmlspecialchars(strip_tags($firstName));
    $lastName = htmlspecialchars(strip_tags($lastName));
    $email = htmlspecialchars(strip_tags($email));
    $password = htmlspecialchars(strip_tags($password));

    //ajouter check regex
    $password_hash = password_hash($password, PASSWORD_DEFAULT);


    $user = (new User($db))
    ->setUsername($username)
    ->setFirstName($firstName)
    ->setLastName($lastName)
    ->setemail($email)
    ->setpassword($password);
    $user->save();

    return $user;

}
 

function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
