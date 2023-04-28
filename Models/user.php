<?php
class users
{
    public $db;
    public $id = null;
    public $phone;
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
            $stmt = $this->db->prepare("INSERT INTO users (phone, firstname, lastname, email, password, active) 
                VALUES (:phone, :firstname, :lastname, :email, :password, 1)");

            $stmt->bindParam(':phone', $this->phone); 
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
            $stmt = $this->db->prepare("UPDATE users SET phone = :phone, firstname = :firstname, lastname = :lastname, email = :email,
                 password = :password WHERE id = :users_id");
            
            $stmt->bindParam(':phone', $this->phone);
            $stmt->bindParam(':firstname', $this->firstname);
            $stmt->bindParam(':lastname', $this->lastname);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);


            $stmt->bindParam(':users_id', $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        }
    }


    public function load(){
        if($this->id){
            $stmt = $this->db->prepare("SELECT * FROM users where id = :users_id");
            $stmt->bindParam(':users_id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $db_users = $stmt->fetch();
            $this->phone = $db_users->phone;
            $this->firstname = $db_users->firstname;
            $this->lastname = $db_users->lastname;
            $this->email = $db_users->email;
            $this->password = $db_users->password;

            return $this;
        }else
        if($this->email){
            $stmt = $this->db->prepare("SELECT * FROM users where email = :email");
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            $db_users = $stmt->fetch();

            if(!$db_users) return null;
            if($this->password === $db_users->password){
                $this->id = $db_users->id;
                // $this->createDate = $db_users->createDate;
                $this->phone = $db_users->phone;
                $this->firstname = $db_users->firstname;
                $this->lastname = $db_users->lastname;
                $this->email = $db_users->email;
                $this->password = $db_users->password;

                return $this;
            }else{
                return false;
            }

        }
        echo "no field to find users";
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
     * Get the value of phone
     */ 
    public function getphone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setphone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

}
