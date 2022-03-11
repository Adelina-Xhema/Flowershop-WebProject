
<?php

class User
{
    private $userid;
    private $firstname;
    private $lastname;
    private $email;
    private $passwordi;
    private $roli;

    public function __construct($userid,$firstname,$lastname, $passwordi, $email, $roli)
    {
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->password = $passwordi;
        $this->email = $email;
        $this->roli = $roli;
    }

    public function setSession()
    {   
        if($this->role==0){
            $_SESSION["roli"] = "0";
            $_SESSION['roleName'] = "SimpleUser";
        }else{
            $_SESSION["roli"] = "1";
            $_SESSION['roleName'] = "Admin";

        }
    }
    public function getUserid(){
        return $this->userid;
    }
    public function setFirstname(){
        return $this->firstname=$firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function setLastname(){
        return $this->lastname=$lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPasswordi(){
        return $this->passwordi;
    }

    public function setPasswordi($passwordi){
        $this->passwordi = $passwordi;
    }

    public function getRoli(){
        return $this->roli;
    }

    public function setRoli($roli){
        $this->roli = $roli;
    }
    
}