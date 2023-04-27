<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/index.css">
        <title>FACIL</title>
        <link rel="icon" href="../Style/favicon.webp" sizes="196x196">
        

    </head>



    <body>


        <header>

        <nav>
            <ul>
                <li><a class="active" href="http://test-facil.fr/index.php">Home</a></li>
                <li><a href="http://test-facil.fr/contact.php">Contact</a></li>
                <li><a href="../Views/espaceutilisateur.php">Mon compte</a></li>
                <li><a href="../Script/disconnect.php">Log out </a></li>
            </ul>
            </nav>

            <!-- <h4>Envoyer vos fichiers simplement et rapidement</h4>
            <button>Se connecter</button>    -->


        </header>

        <main>
        <form method="POST" action="../Script/encode-document.php" enctype="multipart/form-data">

                        <div class="barre">
                        </div>
                        <img class="image_logo" src="../style/logo2.webp">




                        <div class="barre">

                        </div>

                        <!-- CV -->
                        <h3>CV</h3> <H5 class="obligatoire">Obligatoire</H5> 
                        

                        <input class = "file" type = "file" name="upload_file_cv" id="upload_file_cv"/> <br/>
                        <div class="barre">
                        </div>

                        <!-- CNI ou autres -->
                        <h3>Carte Nationale D'identité</h3> <H5 class="obligatoire" type="text">Obligatoire</H5>
                        <h4>Si vous ne possédez pas de carte d'identité veuillez mettre : passeport, titre de séjour et autorisation de travail dans les champs correspondants</h4>
                        <input class = "file" type = "file" name="upload_file_cni" id="upload_file_cni"/> <br/>

                        <div class="barre">
                        </div>
                        <!-- passeport -->
                        <h3>Passeport : Uniquement si vous ne possédez pas de Carte D'identité</h3> <H5 class="obligatoire" type="text">Obligatoire si pas de CNI</H5>
                        <input class = "file" type = "file" name="upload_file_passport" id="upload_file_passport"/> <br/>
                        <!-- titre_de_sejour -->
                        <h3>Titre de séjour : Uniquement si vous ne possédez pas de Carte D'identité</h3> <H5 class="obligatoire" type="text">Obligatoire si pas de CNI</H5>
                        <input class = "file" type = "file" name="upload_file_titre_de_sejour" id="upload_file_titre_de_sejour"/> <br/>
                        <!-- Autorisation de travail -->
                        <h3>Autorisation de travail : Uniquement si vous ne possédez pas de Carte D'identité</h3> <H5 class="obligatoire" type="text">Obligatoire si pas de CNI</H5>
                        <input class = "file" type = "file" name="upload_file_autorisation_de_travail" id="upload_file_autorisation_de_travail"/> <br/>
                        <div class="barre">
                        </div>


                        <!-- Carte Vitale -->
                        <h3>Carte Vitale</h3> <H5 class="obligatoire" type="text">Obligatoire</H5>
                        <input class = "file" type = "file" name="upload_file_vitale" id="upload_file_vitale"/> <br/>
                        <div class="barre">
                        </div>

                        <!-- RIB -->
                        <h3>RIB</h3> <H5 class="obligatoire" type="text">Obligatoire</H5>
                        <input class = "file" type = "file" name="upload_file_rib" id="upload_file_rib"/> <br/>
                        <div class="barre">
                        </div>

                        <!-- carte_grise -->
                        <h3>Carte Grise</h3> 
                        <input class = "file" type = "file" name="upload_file_carte_grise" id="upload_file_carte_grise"/> <br/>


                        <!-- veh_assu -->
                        <h3>Assurance de Véhicule</h3> 
                        <input class = "file" type = "file" name="upload_file_veh_assu" id="upload_file_veh_assu"/> <br/>


                        <!-- Permis -->
                        <h3>Permis</h3> <H5 class="obligatoire" type="text">Obligatoire</H5>
                        <input class = "file" type = "file" name="upload_file_permis" id="upload_file_permis"/> <br/>
                        <div class="barre">
                        </div>

                        <!-- justif_domi -->
                        <h3>Justification de Domicile</h3> <H5 class="obligatoire" type="text">Obligatoire</H5>
                        <input class = "file" type = "file" name="upload_file_justif_domi" id="upload_file_justif_domi"/> <br/>





                        <!-- BOUTON ENVOYER -->
                        <button class="button" type="submit">Envoyer</button>
                        <div class="barre">
                        </div>


        </form>

        </main>
    </body>
</html>