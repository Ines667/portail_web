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
                // if (ftp_mkdir($con, $dir)){
                //         echo "<p class='echo_connecter'>Bienvenue ".$collabname."</p>";
                //         ftp_mkdir($con, $dir2);
                // } else{
                //         echo "Le dossier existe deja";
                // };  
                
                $files = ftp_nlist($con, "collab");
                if(in_array("collab/".$collabname, $files)) {
                echo "<p class='echo_connecter_false'>Le dossier existe deja</p>";
                } else {
                echo "<p class='echo_connecter'>Bienvenue ".$collabname."</p>";
                ftp_mkdir($con, $dir);
                ftp_mkdir($con, $dir2);
                };

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
                echo "<p class='echo_connecter'>Vous etes bien connecter à ".$collabname."</p>";
                } else {
                echo "<p class='echo_connecter_false'>Le dossier n'existe pas.</p>";
                };


        }
        


        //CV
        if (isset($_POST["submit_cv"]))
        {

                $fileName = $_FILES['upload_file_cv']['name'];
                $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));


                $tmpname = $_FILES['upload_file_cv']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "./upload/" . $uniqueName . $fileExt;
                // $resultat = move_uploaded_file($tmpname, $fileName);



                // Uploader le fichier

                // if ($file = ftp_put($con, $dir2 . "/cni" .  $_COOKIE['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0))
                if ($file = ftp_put($con, $dir2 . "/CV_" . $_SESSION['NomPrenom'] . $fileExt, $tmpname, FTP_BINARY, 0))
                {
                
                echo "<p class='echo_sucess'>Transfert réussi de la carte d'identité</p>";
                }
                else
                {
                echo "Erreur";
                }

                // Fermer la connexion
                ftp_close($con);
        }



        //IDCARD
        // if (isset($_POST["submit_"]))
        // {
        //     echo "ok";

        //         $fileName = $_FILES['upload_file_cv']['name'];
        //         $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));


        //         $tmpname = $_FILES['upload_file_cv']['tmp_name'];
        //         $uniqueName = md5(uniqid(rand(), true));
        //         $fileName = "./upload/" . $uniqueName . $fileExt;
        //         // $resultat = move_uploaded_file($tmpname, $fileName);


        //         // Se connecter au serveur
        //         $con = ftp_connect('80.11.12.120', 21);

        //         $login = ftp_login($con, 'RhFacil', 'Facil2023');



        //         // Uploader le fichier

        //         if ($file = ftp_put($con, $dir2 . "/cni" .  $collabname . $fileExt, $tmpname, FTP_BINARY, 0))
        //         {
        //         echo "Transfert réussi de la carte d'identité";
        //         }
        //         else
        //         {
        //         echo "Erreur";
        //         }

        //         // Fermer la connexion
        //         ftp_close($con);
        // }
?>