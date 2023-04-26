<?php

$host = "127.0.0.1";
$dataname = "cesi2";
$user = "root";
$password = "";

// $host = "80.11.12.120";
// $dataname = "facil";
// $user = "facil";
// $password = "M#0rJX{8A9SY";


try {
    $db = new PDO("mysql:host=$host;dbname=$dataname", $user, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

} catch (PDOException $e) {
    die ('Echec de la connexion : ' . $e->getMessage());
}
   
