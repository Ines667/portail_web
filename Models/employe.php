<?php
class Employer
{
    public $db;
    public $IDEMPLOYER = null;
    public $NOM;
    public $PRENOM;
    public $ADRESSE;
    public $VILLE;
    public $PAYS;
    public $CP;
    public $DATENAISSANCE;
    public $LIEUXNAISSANCE;
    public $NUMSECU;
    public $TELPORTABLE;
    public $MAIL;
    public $SEXE;
    public $CIVILITE;
    public $NATIONALITE;
    public $AGES;
    public $PERSOPREV;
    public $TELPREV;
    public $ETRANGER;
    public $NUMTITRESEJOUR;
    public $DATEVALIDTS;
    public $PREINSCRIPTION;
    public $Typedecontrat;
    public $IBAN;
    public $RIB;
    public $DateValiditeNOK;
    public $PRE_Odm;
    public $AnneeEnCour;
    public $code;
    public $iduser;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function create_employe(){
        if(!$this->IDEMPLOYER){
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
                iduser
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
                :anneeencour,
                :iduser
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
        $stmt->bindParam(':anneeencour', $this->AnneeEnCour);
        $stmt->bindParam(':iduser', $this->iduser);

            if($stmt->execute()){
                $this->IDEMPLOYER = $this->db->lastInsertId();

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
                iduser
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
                :anneeencour,
                :iduser");
            
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
            $stmt->bindParam(':anneeencour', $this->AnneeEnCour);
            $stmt->bindParam(':iduser', $this->iduser);


            return $stmt->execute();
        }
    }


    public function load(){
        if($this->IDEMPLOYER){
            $stmt = $this->db->prepare("SELECT * FROM EMPLOYER where IDEMPLOYER = :id");
            $stmt->bindParam(':id', $this->IDEMPLOYER, PDO::PARAM_INT);
            $stmt->execute();
            $db_employer = $stmt->fetch();
            $this->NOM = $db_employer->NOM;
            $this->PRENOM = $db_employer->PRENOM;
            $this->ADRESSE = $db_employer->ADRESSE;
            $this->VILLE = $db_employer->VILLE;
            $this->PAYS = $db_employer->PAYS;
            $this->CP = $db_employer->CP;
            $this->DATENAISSANCE = $db_employer->DATENAISSANCE;
            $this->LIEUXNAISSANCE = $db_employer->LIEUXNAISSANCE;
            $this->NUMSECU = $db_employer->NUMSECU;
            $this->TELPORTABLE = $db_employer->TELPORTABLE;
            $this->MAIL = $db_employer->MAIL;
            $this->SEXE = $db_employer->SEXE;
            $this->CIVILITE = $db_employer->CIVILITE;
            $this->NATIONALITE = $db_employer->NATIONALITE;
            $this->AGES = $db_employer->AGES;
            $this->PERSOPREV = $db_employer->PERSOPREV;
            $this->TELPREV = $db_employer->TELPREV;
            $this->ETRANGER = $db_employer->ETRANGER;
            $this->NUMTITRESEJOUR = $db_employer->NUMTITRESEJOUR;
            $this->DATEVALIDTS = $db_employer->DATEVALIDTS;
            $this->PREINSCRIPTION = $db_employer->PREINSCRIPTION;
            $this->Typedecontrat = $db_employer->Typedecontrat;
            $this->IBAN = $db_employer->IBAN;
            $this->RIB = $db_employer->RIB;
            $this->DateValiditeNOK = $db_employer->DateValiditeNOK;
            $this->PRE_Odm = $db_employer->PRE_Odm;
            $this->AnneeEnCour = $db_employer->AnneeEnCour;
            $this->iduser = $db_employer->iduser;
    
            return $this;
        } else {
            echo "no field to find user";
            exit();
        }
    }



    /**
     * Get the value of IDEMPLOYER
     */ 
    public function getIDEMPLOYER()
    {
        return $this->IDEMPLOYER;
    }

    /**
     * Set the value of IDEMPLOYER
     *
     * @return  self
     */ 
    public function setIDEMPLOYER($IDEMPLOYER)
    {
        $this->IDEMPLOYER = $IDEMPLOYER;

        return $this;
    }

    /**
     * Get the value of NOM
     */ 
    public function getNOM()
    {
        return $this->NOM;
    }

    /**
     * Set the value of NOM
     *
     * @return  self
     */ 
    public function setNOM($NOM)
    {
        $this->NOM = $NOM;

        return $this;
    }

    /**
     * Get the value of PRENOM
     */ 
    public function getPRENOM()
    {
        return $this->PRENOM;
    }

    /**
     * Set the value of PRENOM
     *
     * @return  self
     */ 
    public function setPRENOM($PRENOM)
    {
        $this->PRENOM = $PRENOM;

        return $this;
    }

    /**
     * Get the value of ADRESSE
     */ 
    public function getADRESSE()
    {
        return $this->ADRESSE;
    }

    /**
     * Set the value of ADRESSE
     *
     * @return  self
     */ 
    public function setADRESSE($ADRESSE)
    {
        $this->ADRESSE = $ADRESSE;

        return $this;
    }

    /**
     * Get the value of VILLE
     */ 
    public function getVILLE()
    {
        return $this->VILLE;
    }

    /**
     * Set the value of VILLE
     *
     * @return  self
     */ 
    public function setVILLE($VILLE)
    {
        $this->VILLE = $VILLE;

        return $this;
    }



    /**
     * Get the value of PAYS
     */ 
    public function getPAYS()
    {
        return $this->PAYS;
    }

    /**
     * Set the value of PAYS
     *
     * @return  self
     */ 
    public function setPAYS($PAYS)
    {
        $this->PAYS = $PAYS;

        return $this;
    }

    /**
     * Get the value of CP
     */ 
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set the value of CP
     *
     * @return  self
     */ 
    public function setCP($CP)
    {
        $this->CP = $CP;

        return $this;
    }

    /**
     * Get the value of DATENAISSANCE
     */ 
    public function getDATENAISSANCE()
    {
        return $this->DATENAISSANCE;
    }

    /**
     * Set the value of DATENAISSANCE
     *
     * @return  self
     */ 
    public function setDATENAISSANCE($DATENAISSANCE)
    {
        $this->DATENAISSANCE = $DATENAISSANCE;

        return $this;
    }

    /**
     * Get the value of LIEUXNAISSANCE
     */ 
    public function getLIEUXNAISSANCE()
    {
        return $this->LIEUXNAISSANCE;
    }

    /**
     * Set the value of LIEUXNAISSANCE
     *
     * @return  self
     */ 
    public function setLIEUXNAISSANCE($LIEUXNAISSANCE)
    {
        $this->LIEUXNAISSANCE = $LIEUXNAISSANCE;

        return $this;
    }

    /**
     * Get the value of NUMSECU
     */ 
    public function getNUMSECU()
    {
        return $this->NUMSECU;
    }

    /**
     * Set the value of NUMSECU
     *
     * @return  self
     */ 
    public function setNUMSECU($NUMSECU)
    {
        $this->NUMSECU = $NUMSECU;

        return $this;
    }



    /**
     * Get the value of TELPORTABLE
     */ 
    public function getTELPORTABLE()
    {
        return $this->TELPORTABLE;
    }

    /**
     * Set the value of TELPORTABLE
     *
     * @return  self
     */ 
    public function setTELPORTABLE($TELPORTABLE)
    {
        $this->TELPORTABLE = $TELPORTABLE;

        return $this;
    }

    /**
     * Get the value of MAIL
     */ 
    public function getMAIL()
    {
        return $this->MAIL;
    }

    /**
     * Set the value of MAIL
     *
     * @return  self
     */ 
    public function setMAIL($MAIL)
    {
        $this->MAIL = $MAIL;

        return $this;
    }

    /**
     * Get the value of SEXE
     */ 
    public function getSEXE()
    {
        return $this->SEXE;
    }

    /**
     * Set the value of SEXE
     *
     * @return  self
     */ 
    public function setSEXE($SEXE)
    {
        $this->SEXE = $SEXE;

        return $this;
    }

    /**
     * Get the value of CIVILITE
     */ 
    public function getCIVILITE()
    {
        return $this->CIVILITE;
    }

    /**
     * Set the value of CIVILITE
     *
     * @return  self
     */ 
    public function setCIVILITE($CIVILITE)
    {
        $this->CIVILITE = $CIVILITE;

        return $this;
    }


    /**
     * Get the value of NATIONALITE
     */ 
    public function getNATIONALITE()
    {
        return $this->NATIONALITE;
    }

    /**
     * Set the value of NATIONALITE
     *
     * @return  self
     */ 
    public function setNATIONALITE($NATIONALITE)
    {
        $this->NATIONALITE = $NATIONALITE;

        return $this;
    }

    /**
     * Get the value of AGES
     */ 
    public function getAGES()
    {
        return $this->AGES;
    }

    /**
     * Set the value of AGES
     *
     * @return  self
     */ 
    public function setAGES($AGES)
    {
        $this->AGES = $AGES;

        return $this;
    }



    /**
     * Get the value of PERSOPREV
     */ 
    public function getPERSOPREV()
    {
        return $this->PERSOPREV;
    }

    /**
     * Set the value of PERSOPREV
     *
     * @return  self
     */ 
    public function setPERSOPREV($PERSOPREV)
    {
        $this->PERSOPREV = $PERSOPREV;

        return $this;
    }

    /**
     * Get the value of TELPREV
     */ 
    public function getTELPREV()
    {
        return $this->TELPREV;
    }

    /**
     * Set the value of TELPREV
     *
     * @return  self
     */ 
    public function setTELPREV($TELPREV)
    {
        $this->TELPREV = $TELPREV;

        return $this;
    }

    /**
     * Get the value of ETRANGER
     */ 
    public function getETRANGER()
    {
        return $this->ETRANGER;
    }

    /**
     * Set the value of ETRANGER
     *
     * @return  self
     */ 
    public function setETRANGER($ETRANGER)
    {
        $this->ETRANGER = $ETRANGER;

        return $this;
    }

    /**
     * Get the value of NUMTITRESEJOUR
     */ 
    public function getNUMTITRESEJOUR()
    {
        return $this->NUMTITRESEJOUR;
    }

    /**
     * Set the value of NUMTITRESEJOUR
     *
     * @return  self
     */ 
    public function setNUMTITRESEJOUR($NUMTITRESEJOUR)
    {
        $this->NUMTITRESEJOUR = $NUMTITRESEJOUR;

        return $this;
    }


    /**
     * Get the value of DATEVALIDTS
     */ 
    public function getDATEVALIDTS()
    {
        return $this->DATEVALIDTS;
    }

    /**
     * Set the value of DATEVALIDTS
     *
     * @return  self
     */ 
    public function setDATEVALIDTS($DATEVALIDTS)
    {
        $this->DATEVALIDTS = $DATEVALIDTS;

        return $this;
    }

    /**
     * Get the value of PREINSCRIPTION
     */ 
    public function getPREINSCRIPTION()
    {
        return $this->PREINSCRIPTION;
    }

    /**
     * Set the value of PREINSCRIPTION
     *
     * @return  self
     */ 
    public function setPREINSCRIPTION($PREINSCRIPTION)
    {
        $this->PREINSCRIPTION = $PREINSCRIPTION;

        return $this;
    }

    /**
     * Get the value of Typedecontrat
     */ 
    public function getTypedecontrat()
    {
        return $this->Typedecontrat;
    }

    /**
     * Set the value of Typedecontrat
     *
     * @return  self
     */ 
    public function setTypedecontrat($Typedecontrat)
    {
        $this->Typedecontrat = $Typedecontrat;

        return $this;
    }



    /**
     * Get the value of IBAN
     */ 
    public function getIBAN()
    {
        return $this->IBAN;
    }

    /**
     * Set the value of IBAN
     *
     * @return  self
     */ 
    public function setIBAN($IBAN)
    {
        $this->IBAN = $IBAN;

        return $this;
    }

    /**
     * Get the value of RIB
     */ 
    public function getRIB()
    {
        return $this->RIB;
    }

    /**
     * Set the value of RIB
     *
     * @return  self
     */ 
    public function setRIB($RIB)
    {
        $this->RIB = $RIB;

        return $this;
    }

    /**
     * Get the value of DateValiditeNOK
     */ 
    public function getDateValiditeNOK()
    {
        return $this->DateValiditeNOK;
    }

    /**
     * Set the value of DateValiditeNOK
     *
     * @return  self
     */ 
    public function setDateValiditeNOK($DateValiditeNOK)
    {
        $this->DateValiditeNOK = $DateValiditeNOK;

        return $this;
    }

    /**
     * Get the value of PRE_Odm
     */ 
    public function getPRE_Odm()
    {
        return $this->PRE_Odm;
    }

    /**
     * Set the value of PRE_Odm
     *
     * @return  self
     */ 
    public function setPRE_Odm($PRE_Odm)
    {
        $this->PRE_Odm = $PRE_Odm;

        return $this;
    }

    /**
     * Get the value of AnneeEnCour
     */ 
    public function getAnneeEnCour()
    {
        return $this->AnneeEnCour;
    }

    /**
     * Set the value of AnneeEnCour
     *
     * @return  self
     */ 
    public function setAnneeEnCour($AnneeEnCour)
    {
        $this->AnneeEnCour = $AnneeEnCour;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of iduser
     */ 
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set the value of iduser
     *
     * @return  self
     */ 
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }
}

