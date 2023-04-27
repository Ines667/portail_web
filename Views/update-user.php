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
                <li><a  href="../views/index.php">Home</a></li>
                <li><a href="./Views/contact.php">Contact</a></li>
                <li><a href="../Views/espaceutilisateur.php">Mon compte</a></li>
                <li><a href="../Script/disconnect.php">Log out </a></li>
            </ul>
            </nav>


        </header>

        <main>
            <?php
                if (isset($_GET['password']) && $_GET['password'] === 'false') {
                    // Afficher une alerte avec un message d'erreur
                    echo '<script>alert("Mot de passe ne correspond pas. Veuillez réessayer.");</script>';
                }
            ?>


            <div class="rectanglebox">
                <form method="POST"action="../Controllers/update-user.php">
                    <img class="image_logo" src="../Style/logo2.webp">
                    <h3>Ancien mot de passe :</h3>
                    <input class="bouton_main"type="password" id="late-password" name="late-password">

                    <h3>Nouveau mot de passe :</h3>
                    <input class="bouton_main"type="password" id="new-password" name="new-password"><br>

                    <button type="submit" class="button_create">Modifier</button>
                </form>
            </div>
        </main>
    </body>
</html>
