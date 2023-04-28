<?php
class User
{
    public $db;
    public $id = null;

    // public $createDate;
    

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function update-role(){
        if(!$this->id){
            // L'utilisateur n'existe pas on le crée
            $stmt = $this->db->prepare("INSERT INTO role (Member, ADMIN, First, email, password) 
                VALUES (:Member, :ADMIN, :First, :email, :password)");

            $stmt->bindParam(':Member', $this->Member);
            $stmt->bindParam(':ADMIN', $this->ADMIN);
            $stmt->bindParam(':First', $this->First);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);

            if($stmt->execute()){
                $this->id = $this->db->lastInsertId();

                return $this;
            }
            return null;
        }else{
            $stmt = $this->db->prepare("UPDATE role SET Member = :Member, ADMIN = :ADMIN, First = :First, email = :email,
                 password = :password WHERE id = :user_id");
            
            $stmt->bindParam(':Member', $this->Member);
            $stmt->bindParam(':ADMIN', $this->ADMIN);
            $stmt->bindParam(':First', $this->First);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);


            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        }
    }


    public function getrole(){
        if($this->id){
            $stmt = $this->db->prepare("SELECT * FROM user where id = :user_id");
            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $db_user = $stmt->fetch();
            $this->Member = $db_user->Member;
            $this->ADMIN = $db_user->ADMIN;
            $this->First = $db_user->First;
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
                $this->Member = $db_user->Member;
                $this->ADMIN = $db_user->ADMIN;
                $this->First = $db_user->First;
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
     * Get the value of ADMIN
     */ 
    public function getADMIN()
    {
        return $this->ADMIN;
    }

    /**
     * Set the value of ADMIN
     *
     * @return  self
     */ 
    public function setADMIN($ADMIN)
    {
        $this->ADMIN = $ADMIN;

        return $this;
    }

    /**
     * Get the value of First
     */ 
    public function getFirst()
    {
        return $this->First;
    }

    /**
     * Set the value of First
     *
     * @return  self
     */ 
    public function setFirst($First)
    {
        $this->First = $First;

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
     * Get the value of Member
     */ 
    public function getMember()
    {
        return $this->Member;
    }

    /**
     * Set the value of Member
     *
     * @return  self
     */ 
    public function setMember($Member)
    {
        $this->Member = $Member;

        return $this;
    }

}
