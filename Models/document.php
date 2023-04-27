<?php
class Document
{
    public $db;
    public $id = null;
    public $name;
    public $belongs;
    public $base64;
    // public $createDate;
    

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function create_document(){
        if(!$this->id){
            $stmt = $this->db->prepare("INSERT INTO document (name, belongs, base64) 
                VALUES (:name, :belongs, :base64)");

            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':belongs', $this->belongs);
            $stmt->bindParam(':base64', $this->base64);

            if($stmt->execute()){
                $this->id = $this->db->lastInsertId();

                return $this;
            }
            return null;
        }else{
            $stmt = $this->db->prepare("UPDATE document SET name = :name, belongs = :belongs, base64 = :base64 WHERE id = :user_id");
            
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':belongs', $this->belongs);
            $stmt->bindParam(':base64', $this->base64);



            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        }
    }


    public function read(){
        if($this->id){
            $stmt = $this->db->prepare("SELECT * FROM document where belongs = :user_id");
            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $db_user = $stmt->fetch();
            $this->name = $db_user->name;
            $this->belongs = $db_user->belongs;
            $this->base64 = $db_user->base64;

            return $this;
        }
        exit();
    }


    /**
     * Get the value of belongs
     */ 
    public function getbelongs()
    {
        return $this->belongs;
    }

    /**
     * Set the value of belongs
     *
     * @return  self
     */ 
    public function setbelongs($belongs)
    {
        $this->belongs = $belongs;

        return $this;
    }

    /**
     * Get the value of base64
     */ 
    public function getbase64()
    {
        return $this->base64;
    }

    /**
     * Set the value of base64
     *
     * @return  self
     */ 
    public function setbase64($base64)
    {
        $this->base64 = $base64;

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
     * Get the value of name
     */ 
    public function getname()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setname($name)
    {
        $this->name = $name;

        return $this;
    }

}