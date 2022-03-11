<?php
require_once 'config/dbconnect.php';
require_once 'contactClass.php';

class ContactController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from contact');

        return $query->fetchAll();
    }

    public function insert($request){
        
        $query = $this->db->pdo->prepare('INSERT INTO contact (emri, mbiemri,email, mesazhi)
        VALUES (:emri, :mbiemri, :email,:mesazhi)');

        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':mbiemri', $request['mbiemri']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':mesazhi', $request['mesazhi']);
        $query->execute();

        return header('Location: contact.php');
    }

   

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from contact WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: views/dashboard.php");
    }
}
?>