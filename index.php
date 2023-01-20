<?php
include "script_php/script.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/index.css">
        <title>FACIL</title>
        <link rel="icon" href="favicon.webp" sizes="196x196">

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
        <form method="POST" enctype="multipart/form-data">

                        <div class="barre">
                        </div>


                        <h4>Veuillez indiquer le NomPrenom dans ce format précis : NomPrenom</h4>
                        <input type="text" name="collab_name"/> <br/> <!-- PrenomNom -->
                        <button class = "button" name="create_directory" type="submit">Créer</button>
                        <button class = "button" name="connect_directory" type="submit">Se connecter</button>

                        <div class="barre">

                        </div>

                        <!-- CV -->
                        <h4>CV</h4>
                        <input class = "file" type = "file" name="upload_file_cv" title=" " /> <br/>
                        <input class = "button" type = "submit" name="submit_cv"/> <br/>

                        <div class="barre">
                        </div>

                        <!-- CNI ou autres -->
                        <h4>CNI, si pas de carte d'identité veuillez mettre : passeport, titre de séjour et autorisation de travail</h4>
                        <input class = "file" type = "file" name="upload_file_cni" /> <br/>
                        <input class = "button" type = "submit" name="submit_cni"/> <br/>

                        <div class="barre">
                        </div>

                        <h4>Passeport</h4>
                        <input class = "file" type = "file" name="upload_file_titre" /> <br/>
                        <input class = "button" type = "submit" name="submit_titre"/> <br/>

                        <h4>Titre de séjour</h4>
                        <input class = "file" type = "file" name="upload_file_test" /> <br/>
                        <input class = "button" type = "submit" name="submit_test"/> <br/>

                        <h4>Autorisation de travail</h4>
                        <input class = "file" type = "file" name="upload_file_test2" /> <br/>
                        <input class = "button" type = "submit" name="submit_test2"/> <br/>

                        <div class="barre">
                        </div>


        </form>

        </main>
    </body>
</html>