<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/index.css">
        <title>Register WebPortail Facil</title>
        <link rel="icon" href="favicon.webp" sizes="196x196">

    </head>



    <body>


        <header>

        <nav>
            <ul>
                <li><a href="http://test-facil.fr/index.php">Home</a></li>
                <li><a href="http://test-facil.fr/contact.php">Contact</a></li>
                <li><a class="active"href="http://test-facil.fr/create.php">Création de compte</a></li>
                <li><a href="http://test-facil.fr/reseaux.php">Réseaux</a></li>
                <li><a href="http://test-facil.fr/index.php">Log out </a></li>
            </ul>
            </nav>

            <!-- <h4>Envoyer vos fichiers simplement et rapidement</h4>
            <button>Se connecter</button>    -->


        </header>
        <main>
        <div class="rectanglebox_create">

        
        <img class="image_logo" src="../style/logo2.webp">
        <form method="post" class="label_create" action="../Controllers/create-user.php">

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

                <button class = "button_create"name="createlogin" type="submit">Créer son compte</button>
        </form>
    
        <form action="index.php">
            <input class="button_create"type="submit" value="Se connecter">
        </form>
        </div>
        </main>
    </body>
</html>
