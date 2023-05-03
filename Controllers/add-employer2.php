<?php
require "../Utils/database.php";
require "../Models/employe.php";
  
    // // Appeler la fonction create_employe() avec les données récupérées
    $employe = newemploye($_POST["nom"], $_POST["prenom"], $_POST["adresse"], $_POST["ville"], $_POST["pays"], $_POST["cp"], $_POST["datenaissance"], $_POST["lieuxnaissance"], $_POST["numsecu"], $_POST["telportable"], $_POST["mail"], $_POST["sexe"], $_POST["civilite"], $_POST["nationalite"], $_POST["ages"], $_POST["persoprev"], $_POST["telprev"], $_POST["etranger"], $_POST["numtitresejour"], $_POST["datevalidts"], $_POST["preinscription"], $_POST["typedecontrat"], $_POST["iban"], $_POST["rib"], $_POST["datevaliditenok"], $_POST["pre_odm"], $_POST["anneeencours"], 8);
        if($employe){
            header('Location: ../Views/Admin/main.php?good=true');
        } 
        else header('Location: ./Views/create.php?error');

function newemploye(string $NOM,string $PRENOM,string $ADRESSE,string $VILLE,string $PAYS,string $CP,string $DATENAISSANCE,string $LIEUXNAISSANCE,string $NUMSECU,string $TELPORTABLE,string $MAIL,string $SEXE,string $CIVILITE,string $NATIONALITE,string $AGES,string $PERSOPREV,string $TELPREV,string $ETRANGER,string $NUMTITRESEJOUR,string $DATEVALIDTS,string $PREINSCRIPTION,string $Typedecontrat,string $IBAN,string $RIB,string $DateValiditeNOK,string $PRE_Odm,string $AnneeEnCour,int $iduser){
    global $db;
    // on retire tout les caractères spéciaux qui pourraient mener à une injection sql
    $NOM = htmlspecialchars(strip_tags($NOM));
    $PRENOM = htmlspecialchars(strip_tags($PRENOM));
    $ADRESSE = htmlspecialchars(strip_tags($ADRESSE));
    $VILLE = htmlspecialchars(strip_tags($VILLE));
    $PAYS = htmlspecialchars(strip_tags($PAYS));
    $CP = htmlspecialchars(strip_tags($CP));
    $DATENAISSANCE = htmlspecialchars(strip_tags($DATENAISSANCE));
    $LIEUXNAISSANCE = htmlspecialchars(strip_tags($LIEUXNAISSANCE));
    $NUMSECU = htmlspecialchars(strip_tags($NUMSECU));
    $TELPORTABLE = htmlspecialchars(strip_tags($TELPORTABLE));
    $MAIL = htmlspecialchars(strip_tags($MAIL));
    $SEXE = htmlspecialchars(strip_tags($SEXE));
    $CIVILITE = htmlspecialchars(strip_tags($CIVILITE));
    $NATIONALITE = htmlspecialchars(strip_tags($NATIONALITE));
    $AGES = htmlspecialchars(strip_tags($AGES));
    $PERSOPREV = htmlspecialchars(strip_tags($PERSOPREV));
    $TELPREV = htmlspecialchars(strip_tags($TELPREV));
    $ETRANGER = htmlspecialchars(strip_tags($ETRANGER));
    $NUMTITRESEJOUR = htmlspecialchars(strip_tags($NUMTITRESEJOUR));
    $DATEVALIDTS = htmlspecialchars(strip_tags($DATEVALIDTS));
    $PREINSCRIPTION = htmlspecialchars(strip_tags($PREINSCRIPTION));
    $Typedecontrat = htmlspecialchars(strip_tags($Typedecontrat));
    $IBAN = htmlspecialchars(strip_tags($IBAN));
    $RIB = htmlspecialchars(strip_tags($RIB));
    $DateValiditeNOK = htmlspecialchars(strip_tags($DateValiditeNOK));
    $PRE_Odm = htmlspecialchars(strip_tags($PRE_Odm));
    $AnneeEnCour = htmlspecialchars(strip_tags($AnneeEnCour));
    $iduser = htmlspecialchars(strip_tags($iduser));
    // Génération d'un mot de passe temporaire
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $temp_password = substr(str_shuffle($chars), 0, 8); // Génère un mot de passe de 8 caractères aléatoires
    


    $employe = (new Employer($db))
    ->setNOM($NOM)
    ->setPRENOM($PRENOM)
    ->setADRESSE($ADRESSE)
    ->setVILLE($VILLE)
    ->setPAYS($PAYS)
    ->setCP($CP)
    ->setDATENAISSANCE($DATENAISSANCE)
    ->setLIEUXNAISSANCE($LIEUXNAISSANCE)
    ->setNUMSECU($NUMSECU)
    ->setTELPORTABLE($TELPORTABLE)
    ->setMAIL($MAIL)
    ->setSEXE($SEXE)
    ->setCIVILITE($CIVILITE)
    ->setNATIONALITE($NATIONALITE)
    ->setAGES($AGES)
    ->setPERSOPREV($PERSOPREV)
    ->setTELPREV($TELPREV)
    ->setETRANGER($ETRANGER)
    ->setNUMTITRESEJOUR($NUMTITRESEJOUR)
    ->setDATEVALIDTS($DATEVALIDTS)
    ->setPREINSCRIPTION($PREINSCRIPTION)
    ->setTypedecontrat($Typedecontrat)
    ->setIBAN($IBAN)
    ->setRIB($RIB)
    ->setDateValiditeNOK($DateValiditeNOK)
    ->setPRE_Odm($PRE_Odm)
    ->setAnneeEnCour($AnneeEnCour)
    ->setiduser($iduser);

    $employe->create_employe();

    return $employe;


    // Paramètres de configuration SMTP pour Gmail
    ini_set("SMTP", "smtp.ionos.fr");
    ini_set("smtp_port", "465");
    ini_set("sendmail_from", "m.colpin@test-facil.fr");

    // Récupération des données du formulaire
    $email = $_POST['mail'];

    // Envoi du mail
    $to = $email;
    $subject = 'Bienvenue chez notre entreprise';
    $message = "Votre compte a été créé avec succès. Voici votre mot de passe temporaire : $temp_password";
    $headers = 'From: noreply@entreprise.com' . "\r\n" .
            'Reply-To: noreply@entreprise.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
?>