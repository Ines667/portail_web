<?php
include "script_php/login.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/index.css">
        <script src="script_php/script.js"></script>
        <title>Register WebPortail Facil</title>
        <link rel="icon" href="logo.png" sizes="196x196">

    </head>



    <body>


        <header>

            <nav>
                <img class="image_logo" src="logo2.webp">

                <div
                    class="onglet">
                </div>
            </nav>

            <!-- <h4>Envoyer vos fichiers simplement et rapidement</h4>
            <button>Se connecter</button>    -->


        </header>

        <main>
        <form method="post">
        <label class="text_index"for="email">Adresse email :</label><br>
        <input class="bouton_index"type="email" id="email" name="email" required><br>

        <label class="text_index"for="password">Mot de passe :</label> <br>
        <input class="bouton_index"type="password" id="password" name="password" required> <br>

        <!-- <input class="button"name="login"type="button" value="Se connecter">
        <input class="button"name="create_directory"type="button" value="Création"> -->

        <button class = "button"name="login">Se connecter</button> <br/>
        <!-- <button class="button">Me créer un compte</button> <br/> -->
        </form>
        <form action="create.php" method="post">
        <button class = "button"name="creation"id="creation">Me créer un compte</button> <br/>
        </form>
        </main>
    </body>
</html>
