<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/index.css">
        <title>Connection WebPortail Facil</title>
        <link rel="icon" href="./Style/favicon.webp" sizes="196x196">

    </head>


    <body>


        <header>

            <nav>
            <ul>
                <li><a class="active" href="../views/index.php">Home</a></li>
                <li><a href="./Views/contact.php">Contact</a></li>
                <li><a href="./Views/create.php">Création de compte</a></li>
                <li><a href="./Views/reseaux.php">Réseaux</a></li>
                <li><a href="../Script/disconnect.php">Log out </a></li>
            </ul>
            </nav>


        </header>

        <main>



            <div class="rectanglebox">
                
                <img class="image_logo" src="style/logo2.webp">
                <form method="post" id="login-form" action ="./Controllers/login-user.php">
                        <input class="bouton_index2"type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail" required ><br>

                        <input class="bouton_index2"type="password" id="password" name="password" placeholder="Entrez votre mot de passe" > <br>

                        <button type="submit"class = "button_index"name="login" id="btn-login">Se connecter</button> <br/>
                </form>
                <form action="create.php" method="post">
                <button class = "button_index"name="creation"id="creation" type="submit">Me créer un compte</button> <br/>
                </form>
            </div>

            <?php
                if (isset($_GET['password']) && $_GET['password'] === 'false') {
                    // Afficher une alerte avec un message d'erreur
                    echo '<script>alert("Mot de passe ne correspond pas. Veuillez réessayer.");</script>';
                }
            ?>
        </main>
    </body>
</html>
