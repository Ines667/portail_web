<?php
require "../utils/database.php";
require "../Models/document.php";



function create_document(string $name, string $base64){
    global $db;
    //on retire tout les caractères spéciaux qui pourraient mener à une injection sql
    $name = htmlspecialchars(strip_tags($name));
    $base64 = htmlspecialchars(strip_tags($base64));


    $decode_id = json_decode($_SESSION['USER']);

    $document = (new Document($db))
    ->setname($name)
    ->setbase64($base64)
    ->setbelongs($decode_id->id);
    $document->create_document();

    return $document;

}
