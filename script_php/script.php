<?php

session_start();

// Se connecter au serveur
$con = ftp_connect('80.11.12.120', 21);
$login = ftp_login($con, 'RhFacil', 'Facil2023');







        //bouton créer
        if (isset($_POST["create_directory"])){

                $collabname = $_POST['collab_name'];
                $_SESSION['NomPrenom']=$_POST['collab_name'];
                $dir = "collab/" .$_SESSION['NomPrenom'];
                $dir2 = $dir . "/document";

                $files = ftp_nlist($con, "collab");
                if(in_array("collab/".$collabname, $files)) {
                echo "<p class='echo_connecter_false'>Le dossier existe deja</p>";} 
                else {
                echo "<p class='echo_connecter'>Bienvenue ".$collabname."</p>";
                ftp_mkdir($con, $dir);
                ftp_mkdir($con, $dir2);};
        }

        $dir = "collab/" .$_SESSION['NomPrenom'];
        $dir2 = $dir . "/document";


        //bouton connect
        if (isset($_POST["connect_directory"])){

                $collabname = $_POST['collab_name'];
                $_SESSION['NomPrenom']=$_POST['collab_name'];
                $dir = "collab/" .$_SESSION['NomPrenom'];
                $dir2 = $dir . "/document";

                $files = ftp_nlist($con, "collab");
                if(in_array("collab/".$collabname, $files)) {
                echo "<p class='echo_connecter'>Vous etes bien connecter à ".$collabname."</p>";} 
                else {
                echo "<p class='echo_connecter_false'>Le dossier n'existe pas.</p>";};
        }
        


        //CV
        if (isset($_POST["submit_cv"]))
        {
                $fileName = $_FILES['upload_file_cv']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_cv']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/CV_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi du CV.</p>";}
                else{echo "Erreur";}
        }

        //IDcard
        if (isset($_POST["submit_cni"]))
        {
                $fileName = $_FILES['upload_file_cni']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_cni']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/CNI_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de la carte d'identité</p>";}
                else{echo "Erreur";}
        }



        //passport
        if (isset($_POST["submit_passport"]))
        {
                $fileName = $_FILES['upload_file_passport']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_passport']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Passeport_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre Passeport.</p>";}
                else{echo "Erreur";}
        }


        //titre_de_sejour
        if (isset($_POST["submit_titre_de_sejour"]))
        {
                $fileName = $_FILES['upload_file_titre_de_sejour']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_titre_de_sejour']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Titre_De_Sejour_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre titre de séjour.</p>";}
                else{echo "Erreur";}
        }

        //autorisation de travail
        if (isset($_POST["submit_autorisation_de_travail"]))
        {
                $fileName = $_FILES['upload_file_autorisation_de_travail']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_autorisation_de_travail']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Autorisation_De_Travail_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre autorisation de travail.</p>";}
                else{echo "Erreur";}
        }

        //vital
        if (isset($_POST["submit_vital"]))
        {
                $fileName = $_FILES['upload_file_vital']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_vital']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Carte_Vitale_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre Carte Vitale.</p>";}
                else{echo "Erreur";}
        }

        //rib
        if (isset($_POST["submit_rib"]))
        {
                $fileName = $_FILES['upload_file_rib']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_rib']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/RIB_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre RIB.</p>";}
                else{echo "Erreur";}
        }

        //carte_grise
        if (isset($_POST["submit_carte_grise"]))
        {
                $fileName = $_FILES['upload_file_carte_grise']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_carte_grise']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Carte_Grise_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre carte grise.</p>";}
                else{echo "Erreur";}
        }

        //veh_assu
        if (isset($_POST["submit_veh_assu"]))
        {
                $fileName = $_FILES['upload_file_veh_assu']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_veh_assu']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Assurance_Véhicule_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre Assurance Véhicule.</p>";}
                else{echo "Erreur";}
        }

        //permis
        if (isset($_POST["submit_permis"]))
        {
                $fileName = $_FILES['upload_file_permis']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_permis']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Permis_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre permis.</p>";}
                else{echo "Erreur";}
        }

        //justif_domi
        if (isset($_POST["submit_justif_domi"]))
        {
                $fileName = $_FILES['upload_file_justif_domi']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));
                $tmpname = $_FILES['upload_file_justif_domi']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;

                // Uploader le fichier
                if ($file = ftp_put($con, $dir2 . "/Justififcation_Domicile_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0)){
                echo "<p class='echo_sucess'>Transfert réussi de votre Justification de Domicile.</p>";}
                else{echo "Erreur";}
                session_destroy();
        }        




?>