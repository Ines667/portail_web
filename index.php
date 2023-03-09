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
                <ul>
                    <li><a href="#"><img src="style/linkedin.png" class="imgnav"alt="LinkedIn"></a></li>
                    <li><a href="#"><img src="style/facebook.png" class="imgnav"alt="Facebook"></a></li>
                    <li><a href="#"><img src="style/siteinternet.png" class="imgnav"alt="Autre"></a></li>
                </ul>
            </nav>


            <nav>
                <!-- <img class="image_logo" src="logo2.webp"> -->

                <div
                    class="onglet">
                </div>
            </nav>


        </header>

        <main>
            <img class="image_logo" src="logo2.webp">


            <div class="rectanglebox">
                <form method="post">
                <input class="bouton_index2"type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail" required ><br>

                <input class="bouton_index"type="password" id="password" name="password" placeholder="Entrez votre mot de passe"required > <br>

                <!-- <input class="button"name="login"type="button" value="Se connecter">
                <input class="button"name="create_directory"type="button" value="Création"> -->

                <button class = "button_index"name="login">Se connecter</button> <br/>
                <!-- <button class="button">Me créer un compte</button> <br/> -->
                </form>
                <form action="create.php" method="post">
                <button class = "button_index"name="creation"id="creation">Me créer un compte</button> <br/>
                </form>
            </div>
        </main>
    </body>
</html>
