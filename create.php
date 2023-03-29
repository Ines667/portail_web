<?php
include "script_php/createlogin.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/index.css">
        <title>Register WebPortail Facil</title>
        <link rel="icon" href="favicon.webp" sizes="196x196">

    </head>



    <body>


        <header>

            <nav>
                <!-- <img class="image_logo" src="logo2.webp"> -->

                <div
                    class="onglet">
                </div>
            </nav>

            <!-- <h4>Envoyer vos fichiers simplement et rapidement</h4>
            <button>Se connecter</button>    -->


        </header>
        <img class="image_logo" src="logo2.webp">
        <main>
        <form method="post">

        <label for="username">Votre identifiant :</label><br>
        <input class="bouton_main"type="username" id="username" name="username" required><br>

        <label for="email">Adresse email :</label><br>
        <input class="bouton_main"type="email" id="email" name="email" required><br>

        <label for="password">Mot de passe :</label><br>
        <input class="bouton_main"type="password" id="password" name="password" required><br>


        <label for="text">Prénom</label><br>
        <input class="bouton_main"type="text" id="firstname" name="firstname" required><br>

        <label for="text">Nom</label><br>
        <input class="bouton_main"type="text" id="lastname" name="lastname" required><br>

        <!-- <input class="button"name="login"type="button" value="Se connecter">
        <input class="button"name="create_directory"type="button" value="Création"> -->

        <button class = "button"name="createlogin">Créer son compte</button>
        </form>

        <form action="index.php">
            <input class="button"type="submit" value="Se connecter">
        </form>

        </main>
    </body>
</html>
