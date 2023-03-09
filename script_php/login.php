<?php

    // Connexion � la base de donn�es
    // $host = "db5011701111.hosting-data.io";
    // $username = "dbu5537428";
    // $password = "Mathiscamille2021";
    // $dbname = "dbs9859875";
    


    $conn = mysqli_connect("db5011701111.hosting-data.io", "dbu5537428", "Mathiscamille2021", "dbs9859875");

    if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user WHERE email='".$email."' AND password='".$password."'";
    $result = mysqli_query($conn, $query);
    $tableau = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        // login successful
        session_start();
        $_SESSION['NomPrenom'] = $tableau['lastname'].$tableau['firstname'];
        header("Location: ../main.php");
        
    } else {
        // login failed
        echo "Adresse Mail ou Mot de passe incorect";

    }

    mysqli_close($conn);
    }

    if (isset($_POST["creation"])){
        header("Location: create.php");
    }
    
?>