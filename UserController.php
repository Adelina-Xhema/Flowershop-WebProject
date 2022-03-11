<?php
require_once 'config/dbconnect.php';
require_once 'user.php';

class UserController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from user');

        return $query->fetchAll();
    }


    public function insert($request){
        
        $query = $this->db->pdo->prepare('INSERT INTO user (firstname, lastname, email, passwordi, roli)
        VALUES (:firstname, :lastname, :email, :passwordi,0)');

        $query->bindParam(':firstname', $request['firstname']);
        $query->bindParam(':lastname', $request['lastname']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':passwordi', $request['passwordi']);

        $query->execute();

        return header('Location: index.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from user WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE user SET firstname = :firstname,
        lastname = :lastname, email = :email, passwordi=:passwordi WHERE id = :id');
        $query->bindParam(':firstname', $request['firstname']);
        $query->bindParam(':lastname', $request['lastname']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':passwordi', $request['passwordi']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: views/dashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from user WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: views/dashboard.php");
    }
    public function readUserData($email){
            $query = $this->db->pdo->prepare('SELECT * from user WHERE email LIKE :email');
            $query->bindParam(':email', $email);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }
}
?>