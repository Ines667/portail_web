<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Style/index.css">
        <title>FACIL</title>
        <link rel="icon" href="../Style/favicon.webp" sizes="196x196">
    </head>



    <body>
        <header>
            <nav>
                <ul>
                    <li><a  href="../main.php">Home</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../espaceutilisateur.php">Mon compte</a></li>
                    <li><a class="active"href="../Views/Admin/main.php">Administration</a></li>
                    <li><a href="../disconnect.php">Log out </a></li>
                </ul>
            </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <main>

        <?php
                if (isset($_GET['good']) && $_GET['good'] === 'true') {
                    // Afficher une alerte avec un message d'erreur
                    echo '<script>alert("Création Réussi");</script>';
                }
            ?>
        <!-- Vérification que l'utilisateur est bien un administrateur. -->
            <form method="POST" action="../../Controllers/add-employer.php" enctype="multipart/form-data">
                
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom"><br>

                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom"><br>

                    <label for="adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adresse"><br>

                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville"><br>

                    <label for="pays">Pays :</label>
                    <input type="text" id="pays" name="pays"><br>

                    <label for="cp">Code postal :</label>
                    <input type="text" id="cp" name="cp"><br>

                    <label for="datenaissance">Date de naissance :</label>
                    <input type="date" id="datenaissance" name="datenaissance"><br>

                    <label for="lieuxnaissance">Lieu de naissance :</label>
                    <input type="text" id="lieuxnaissance" name="lieuxnaissance"><br>

                    <label for="numsecu">Numéro de sécurité sociale :</label>
                    <input type="text" id="numsecu" name="numsecu"><br>

                    <label for="telportable">Téléphone portable :</label>
                    <input type="text" id="telportable" name="telportable"><br>

                    <label for="mail">Adresse email :</label>
                    <input type="email" id="mail" name="mail"><br>

                    <label for="sexe">Sexe :</label>
                    <input type="radio" id="sexe" name="sexe" value="F"> Femme
                    <input type="radio" id="sexe" name="sexe" value="H"> Homme<br>

                    <label for="civilite">Civilité :</label>
                    <select id="civilite" name="civilite">
                        <option value="Mme">Madame</option>
                        <option value="M.">Monsieur</option>
                    </select><br>

                    <label for="nationalite">Nationalité :</label>
                    <input type="text" id="nationalite" name="nationalite"><br>

                    <label for="ages">Âges :</label>
                    <input type="text" id="ages" name="ages"><br>

                    <label for="persoprev">Personne à prévenir en cas d'urgence :</label>
                    <input type="text" id="persoprev" name="persoprev"><br>

                    <label for="telprev">Téléphone personne à prévenir :</label>
                    <input type="text" id="telprev" name="telprev"><br>

                    <label for="etranger">Étranger :</label>
                    <input type="checkbox" id="etranger" name="etranger" value=1><br>

                    <label for="numtitresejour">Numéro de titre de séjour :</label>
                    <input type="text" id="numtitresejour" name="numtitresejour"><br>

                    <label for="datevalidts">Date de validité du titre de séjour :</label>
                    <input type="date" id="datevalidts" name="datevalidts"><br>

                    <label for="preinscription">Préinscription :</label>
                    <input type="checkbox" id="preinscription" name="preinscription" value=1><br>

                    <label for="typedecontrat">Type de contrat :</label>
                    <select id="typedecontrat" name="typedecontrat">
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="stage">Stage</option>
                    </select><br>

                    <label for="iban">IBAN :</label>
                    <input type="text" id="iban" name="iban"><br>

                    <label for="rib">RIB :</label>
                    <input type="text" id="rib" name="rib"><br>

                    <label for="datevaliditenok">Date de validité de la carte d'identité ou du passeport :</label>
                    <input type="date" id="datevaliditenok" name="datevaliditenok"><br>

                    <label for="pre_odm">Préfecture :</label>
                    <input type="text" id="pre_odm" name="pre_odm"><br>

                    <label for="anneeencours">Année en cours :</label>
                    <input type="text" id="anneeencours" name="anneeencours"><br>

                    <input type="hidden" id="iduser" name="iduser" value="12345"><br>

                    <input type="submit" value="Envoyer">
                            
            </form>

        </main>
    </body>
</html>