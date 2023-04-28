<?php
class User
{
    public $db;
    public $id = null;
    public $NOM;
    public $PRENOM;
    public $ADRESSE;
    public $VILLE;
    public $PAYS;
    public $CP;
    public $DATENAISSANCE;
    public $LIEUXNAISSANCE;
    public $NUMSECU;
    public $TELFIXE;
    public $TELPORTABLE;
    public $MAIL;
    public $SEXE;
    public $CIVILITE;
    public $NOMJF;
    public $NATIONALITE;
    public $AGES;
    public $SITUFAM;
    public $NBREENFAN;
    public $PERSOPREV;
    public $TELPREV;
    public $ETRANGER;
    public $NUMTITRESEJOUR;
    public $NUMPERSOETRANGER;
    public $OBSERVATIONETRANGER;
    public $DATEVALIDTS;
    public $PREINSCRIPTION;
    public $Typedecontrat;
    public $EN_POSTE;
    public $PLUS_EN_POSTE;
    public $EnPresta;
    public $PrevisionPresta;
    public $DEPART_NAISSANCE;
    public $IBAN;
    public $RIB;
    public $DateValiditeNOK;
    public $PRE_Odm;
    public $AnneeEnCour;
    public $code;
    // public $createDate;
    

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function new_employe(){
        if(!$this->id){
            // L'utilisateur n'existe pas on le crée
            $stmt = $this->db->prepare("INSERT INTO EMPLOYER (
                NOM,
                PRENOM,
                ADRESSE,
                VILLE,
                PAYS,
                CP,
                DATENAISSANCE,
                LIEUXNAISSANCE,
                NUMSECU,
                TELPORTABLE,
                MAIL,
                SEXE,
                CIVILITE,
                NATIONALITE,
                AGES,
                PERSOPREV,
                TELPREV,
                ETRANGER,
                NUMTITRESEJOUR,
                DATEVALIDTS,
                PREINSCRIPTION,
                Typedecontrat,
                IBAN,
                RIB,
                DateValiditeNOK,
                PRE_Odm,
                AnneeEnCour,
                code
            ) VALUES (
                :nom,
                :prenom,
                :adresse,
                :ville,
                :pays,
                :cp,
                :datenaissance,
                :lieuxnaissance,
                :numsecu,
                :telportable,
                :mail,
                :sexe,
                :civilite,
                :nationalite,
                :ages,
                :persoprev,
                :telprev,
                :etranger,
                :numtitresejour,
                :datevalidts,
                :preinscription,
                :typedecontrat,
                :iban,
                :rib,
                :datevaliditenok,
                :preodm,
                :anneeen cour,
                :code
            )");

        $stmt->bindParam(':nom', $this->NOM);
        $stmt->bindParam(':prenom', $this->PRENOM);
        $stmt->bindParam(':adresse', $this->ADRESSE);
        $stmt->bindParam(':ville', $this->VILLE);
        $stmt->bindParam(':pays', $this->PAYS);
        $stmt->bindParam(':cp', $this->CP);
        $stmt->bindParam(':datenaissance', $this->DATENAISSANCE);
        $stmt->bindParam(':lieuxnaissance', $this->LIEUXNAISSANCE);
        $stmt->bindParam(':numsecu', $this->NUMSECU);
        $stmt->bindParam(':telportable', $this->TELPORTABLE);
        $stmt->bindParam(':mail', $this->MAIL);
        $stmt->bindParam(':sexe', $this->SEXE);
        $stmt->bindParam(':civilite', $this->CIVILITE);
        $stmt->bindParam(':nationalite', $this->NATIONALITE);
        $stmt->bindParam(':ages', $this->AGES);
        $stmt->bindParam(':persoprev', $this->PERSOPREV);
        $stmt->bindParam(':telprev', $this->TELPREV);
        $stmt->bindParam(':etranger', $this->ETRANGER);
        $stmt->bindParam(':numtitresejour', $this->NUMTITRESEJOUR);
        $stmt->bindParam(':datevalidts', $this->DATEVALIDTS);
        $stmt->bindParam(':preinscription', $this->PREINSCRIPTION);
        $stmt->bindParam(':typedecontrat', $this->Typedecontrat);
        $stmt->bindParam(':iban', $this->IBAN);
        $stmt->bindParam(':rib', $this->RIB);
        $stmt->bindParam(':datevaliditenok', $this->DateValiditeNOK);
        $stmt->bindParam(':preodm', $this->PRE_Odm);
        $stmt->bindParam(':anneeen cour', $this->AnneeEnCour);
        $stmt->bindParam(':code', $this->code);

            if($stmt->execute()){
                $this->id = $this->db->lastInsertId();

                return $this;
            }
            return null;
        }else{
            $stmt = $this->db->prepare("UPDATE EMPLOYER SET (
                NOM,
                PRENOM,
                ADRESSE,
                VILLE,
                PAYS,
                CP,
                DATENAISSANCE,
                LIEUXNAISSANCE,
                NUMSECU,
                TELPORTABLE,
                MAIL,
                SEXE,
                CIVILITE,
                NATIONALITE,
                AGES,
                PERSOPREV,
                TELPREV,
                ETRANGER,
                NUMTITRESEJOUR,
                DATEVALIDTS,
                PREINSCRIPTION,
                Typedecontrat,
                IBAN,
                RIB,
                DateValiditeNOK,
                PRE_Odm,
                AnneeEnCour,
                code
            ) VALUES (
                :nom,
                :prenom,
                :adresse,
                :ville,
                :pays,
                :cp,
                :datenaissance,
                :lieuxnaissance,
                :numsecu,
                :telportable,
                :mail,
                :sexe,
                :civilite,
                :nationalite,
                :ages,
                :persoprev,
                :telprev,
                :etranger,
                :numtitresejour,
                :datevalidts,
                :preinscription,
                :typedecontrat,
                :iban,
                :rib,
                :datevaliditenok,
                :preodm,
                :anneeen cour,
                :code");
            
            $stmt->bindParam(':nom', $this->NOM);
            $stmt->bindParam(':prenom', $this->PRENOM);
            $stmt->bindParam(':adresse', $this->ADRESSE);
            $stmt->bindParam(':ville', $this->VILLE);
            $stmt->bindParam(':pays', $this->PAYS);
            $stmt->bindParam(':cp', $this->CP);
            $stmt->bindParam(':datenaissance', $this->DATENAISSANCE);
            $stmt->bindParam(':lieuxnaissance', $this->LIEUXNAISSANCE);
            $stmt->bindParam(':numsecu', $this->NUMSECU);
            $stmt->bindParam(':telportable', $this->TELPORTABLE);
            $stmt->bindParam(':mail', $this->MAIL);
            $stmt->bindParam(':sexe', $this->SEXE);
            $stmt->bindParam(':civilite', $this->CIVILITE);
            $stmt->bindParam(':nationalite', $this->NATIONALITE);
            $stmt->bindParam(':ages', $this->AGES);
            $stmt->bindParam(':persoprev', $this->PERSOPREV);
            $stmt->bindParam(':telprev', $this->TELPREV);
            $stmt->bindParam(':etranger', $this->ETRANGER);
            $stmt->bindParam(':numtitresejour', $this->NUMTITRESEJOUR);
            $stmt->bindParam(':datevalidts', $this->DATEVALIDTS);
            $stmt->bindParam(':preinscription', $this->PREINSCRIPTION);
            $stmt->bindParam(':typedecontrat', $this->Typedecontrat);
            $stmt->bindParam(':iban', $this->IBAN);
            $stmt->bindParam(':rib', $this->RIB);
            $stmt->bindParam(':datevaliditenok', $this->DateValiditeNOK);
            $stmt->bindParam(':preodm', $this->PRE_Odm);
            $stmt->bindParam(':anneeen cour', $this->AnneeEnCour);
            $stmt->bindParam(':code', $this->code);


            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        }
    }


    public function load(){
        if($this->id){
            $stmt = $this->db->prepare("SELECT * FROM EMPLOYER where IDEMPLOYER = :user_id");
            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $db_user = $stmt->fetch();
            $this->username = $db_user->username;
            $this->firstname = $db_user->firstname;
            $this->lastname = $db_user->lastname;
            $this->email = $db_user->email;
            $this->password = $db_user->password;

            return $this;
        }else
        if($this->email){
            $stmt = $this->db->prepare("SELECT * FROM user where email = :email");
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            $db_user = $stmt->fetch();

            if(!$db_user) return null;
            if($this->password === $db_user->password){
                $this->id = $db_user->id;
                // $this->createDate = $db_user->createDate;
                $this->username = $db_user->username;
                $this->firstname = $db_user->firstname;
                $this->lastname = $db_user->lastname;
                $this->email = $db_user->email;
                $this->password = $db_user->password;

                return $this;
            }else{
                return false;
            }

        }
        echo "no field to find user";
        exit();
    }


    /**
     * Get the value of firstname
     */ 
    public function getfirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setfirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getlastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setlastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getemail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setpassword($password)
    {
        $this->password = $password;

        return $this;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getusername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setusername($username)
    {
        $this->username = $username;

        return $this;
    }

}
