<?php
class User
{
    public $db;
    public $id = null;
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    // public $createDate;
    

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function save(){
        if(!$this->id){
            // L'utilisateur n'existe pas on le crée
            $stmt = $this->db->prepare("INSERT INTO user (username, firstname, lastname, email, password) 
                VALUES (:username, :firstname, :lastname, :email, :password)");

            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':firstname', $this->firstname);
            $stmt->bindParam(':lastname', $this->lastname);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);

            if($stmt->execute()){
                $this->id = $this->db->lastInsertId();

                return $this;
            }
            return null;
        }else{
            $stmt = $this->db->prepare("UPDATE user SET username = :username, firstname = :firstname, lastname = :lastname, email = :email,
                 password = :password WHERE id = :user_id");
            
            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':firstname', $this->firstname);
            $stmt->bindParam(':lastname', $this->lastname);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);


            $stmt->bindParam(':user_id', $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        }
    }


    public function load(){
        if($this->id){
            $stmt = $this->db->prepare("SELECT * FROM user where id = :user_id");
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
