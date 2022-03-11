<?php

include 'config/dbconnect.php';

class AuthController
{
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function login($request){

        $query = $this->db->pdo->prepare('SELECT email,passwordi,roli FROM user WHERE email = :email');
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($request['passwordi'], $user['passwordi']) ){
            $_SESSION['id'] = $user['id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['roli'] = $user['roli'];

            header('Location: index.php');
            
            
        }
    }
}
