<?php
session_start();
require "../Controllers/add-document.php";

    if(isset($_FILES['upload_file_cv'])){
        $fichier_cv = $_FILES['upload_file_cv']['tmp_name'];
        $base64_cv = base64_encode(file_get_contents($fichier_cv));
        create_document($fichier_cv, $base64_cv);
    }
    
    
    if(isset($_FILES['upload_file_cni'])){
        $fichier_cni = $_FILES['upload_file_cni']['tmp_name'];
        $base64_cni = base64_encode(file_get_contents($fichier_cni));
        create_document($fichier_cni, $base64_cni); 

    }
    
    if(isset($_FILES['upload_file_passport'])){
        $fichier_passport = $_FILES['upload_file_passport']['tmp_name'];
        $base64_passport = base64_encode(file_get_contents($fichier_passport));

    }
    
    if(isset($_FILES['upload_file_titre_de_sejour'])){
        $fichier_titre_de_sejour = $_FILES['upload_file_titre_de_sejour']['tmp_name'];
        $base64_titre_de_sejour = base64_encode(file_get_contents($fichier_titre_de_sejour));
        echo $base64_titre_de_sejour;
    }
    
    if(isset($_FILES['upload_file_autorisation_de_travail'])){
        $fichier_autorisation_de_travail = $_FILES['upload_file_autorisation_de_travail']['tmp_name'];
        $base64_autorisation_de_travail = base64_encode(file_get_contents($fichier_autorisation_de_travail));
        echo $base64_autorisation_de_travail;
    }
    
    if(isset($_FILES['upload_file_vitale'])){
        $fichier_vitale = $_FILES['upload_file_vitale']['tmp_name'];
        $base64_vitale = base64_encode(file_get_contents($fichier_vitale));
        echo $base64_vitale;
    }
    
    if(isset($_FILES['upload_file_rib'])){
        $fichier_rib = $_FILES['upload_file_rib']['tmp_name'];
        $base64_rib = base64_encode(file_get_contents($fichier_rib));
        echo $base64_rib;
    }
    
    if(isset($_FILES['upload_file_carte_grise'])){
        $fichier_carte_grise = $_FILES['upload_file_carte_grise']['tmp_name'];
        $base64_carte_grise = base64_encode(file_get_contents($fichier_carte_grise));
        echo $base64_carte_grise;
    }
    
    if(isset($_FILES['upload_file_veh_assu'])){
        $fichier_veh_assu = $_FILES['upload_file_veh_assu']['tmp_name'];
        $base64_veh_assu = base64_encode(file_get_contents($fichier_veh_assu));
        echo $base64_veh_assu;
    }
    
    if(isset($_FILES['upload_file_permis'])){
        $fichier_permis = $_FILES['upload_file_permis']['tmp_name'];
        $base64_fichier_permis = base64_encode(file_get_contents($fichier_permis));
        echo $base64_fichier_permis;
    }
    
    if(isset($_FILES['upload_file_justif_domi'])){
        $fichier_justif_domi = $_FILES['upload_file_justif_domi']['tmp_name'];
        $base64_justif_domi = base64_encode(file_get_contents($fichier_justif_domi));
        echo $base64_justif_domi;
    }
    

?>