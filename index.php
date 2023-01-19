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
                <h1>FACIL</h1>
                <div
                    class="onglet">
                </div>
            </nav>

            <!-- <h4>Envoyer vos fichiers simplement et rapidement</h4>
            <button>Se connecter</button>    -->


        </header>

        <main>
        <form method="POST" enctype="multipart/form-data">
                        <h5>Veuillez indiquer le NomPrenom dans ce format précis : NomPrenom</h5>
                        <input type="text" name="collab_name"/> <br/> <!-- PrenomNom -->
                        <button class = "button" name="create_directory" type="submit">Créer</button>

                        <!-- CV -->
                        <h5>CV</h5> <br/>
                        <input class = "file" type = "file" name="upload_file_cv" title=" " /> <br/>
                        <input class = "button" type = "submit" name="submit_cv"/> <br/>

                        <h5>CNI, si pas de carte d'identité veuillez mettre : passeport, titre de séjour et autorisation de travail</h5> <br/>
                        <input class = "file" type = "file" name="upload_file_cni" /> <br/>
                        <input class = "button" type = "submit" name="submit_cni"/> <br/>

                        <h5>Passeport</h5>
                        <input class = "file" type = "file" name="upload_file_titre" /> <br/>
                        <input class = "button" type = "submit" name="submit_titre"/> <br/>

                        <h5>Titre de séjour</h5>
                        <input class = "file" type = "file" name="upload_file_test" /> <br/>
                        <input class = "button" type = "submit" name="submit_test"/> <br/>

                        <h5>Autorisation de travail</h5>
                        <input class = "file" type = "file" name="upload_file_test2" /> <br/>
                        <input class = "button" type = "submit" name="submit_test2"/> <br/>


        </form>

        </main>
    </body>
</html>