<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Style/index.css">
        <title>Mon compte WebPortail Facil</title>
        <link rel="icon" href="./Style/favicon.webp" sizes="196x196">

    </head>


    <body>


        <header>

            <nav>
            <ul>
                <li><a href="../views/index.php">Home</a></li>
                <li><a href="./Views/contact.php">Contact</a></li>
                <li><a class="active"href="../Views/espaceutilisateur.php">Mon compte</a></li>
                <li><a href="../Script/disconnect.php">Log out </a></li>
            </ul>
            </nav>


        </header>

        <main>
            


            <div class="rectanglebox">
                <form class="label_create"method="POST"action="../Views/update-user.php">
                    <img class="image_logo" src="../Style/logo2.webp">
                    <h3>Votre adresse Email :</h3>
                    <p>
                                <?php

                                    $decode = json_decode($_SESSION['USER']);

                                    echo $decode->email;

                                ?>
                    </p>
                    
                    <button class="button_create"type="submit">Modifier mon mot de passe.</button>
                </form>

            </div>
        </main>
    </body>
</html>
