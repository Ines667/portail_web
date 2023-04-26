<?php

// Connexion à la base de données
// $host = "hostname"; // Remplacez "hostname" par l'adresse du serveur de base de données
// $username = "username"; // Remplacez "username" par votre nom d'utilisateur de la base de données
// $password = "password"; // Remplacez "password" par votre mot de passe de la base de données
// $dbname = "dbname"; // Remplacez "dbname" par le nom de votre base de données
// $conn = mysqli_connect($host, $username, $password, $dbname);

$conn = mysqli_connect("db5011701111.hosting-data.io", "dbu5537428", "Mathiscamille2021", "dbs9859875");

$con = ftp_connect('80.11.12.120', 21);
$login = ftp_login($con, 'RhFacil', 'Facil2023');


// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];




if (isset($_POST["createlogin"])){
    $query = "INSERT INTO user (username, email, password, lastname, firstname) VALUES ('$username', '$email', '$password', '$lastname', '$firstname')";
    $verif = "SELECT email from user where email='".$email."'";
    $result = mysqli_query($conn, $verif);
    // $tableau = mysqli_fetch_assoc($result);
    
    if (mysqli_num_rows($result) < 1) {

        if (mysqli_query($conn, $query)) {
            session_start();
            $_SESSION['NomPrenom'] = $_POST['lastname'].$_POST['firstname'];
            $dir = "collab/" .$_SESSION['NomPrenom'];
            $dir2 = $dir . "/document";

            ftp_mkdir($con, $dir);
            ftp_mkdir($con, $dir2);  
            header("Location: ../main.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    mysqli_close($conn);
    }
    else{
        echo "Adresse Mail deja enregistrée";
    }
    
}

?>