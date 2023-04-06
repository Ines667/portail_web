

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/index.css">
        <title>Connection WebPortail Facil</title>
        <link rel="icon" href="logo.png" sizes="196x196">

    </head>


    <body>


        <header>

            <nav>
            <ul>
                <li><a class="active" href="http://test-facil.fr/index.php">Home</a></li>
                <li><a href="http://test-facil.fr/contact.php">Contact</a></li>
                <li><a href="http://test-facil.fr/create.php">Création de compte</a></li>
                <li><a href="http://test-facil.fr/reseaux.php">Réseaux</a></li>
                <li><a href="http://test-facil.fr/index.php">Log out </a></li>
            </ul>
            </nav>


        </header>

        <main>
            


            <div class="rectanglebox">
                
                <img class="image_logo" src="logo2.webp">
                <form id="login-form">
                <input class="bouton_index2"type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail" required ><br>

                <input class="bouton_index2"type="password" id="password" name="password" placeholder="Entrez votre mot de passe"required > <br>

                <button type="submit"class = "button_index"name="login" id="btn-login">Se connecter</button> <br/>
                </form>
                <form action="create.php" method="post">
                <button class = "button_index"name="creation"id="creation">Me créer un compte</button> <br/>
                </form>
            </div>
        </main>
        <script src="script_php/login.js"></script>
    </body>
</html>
