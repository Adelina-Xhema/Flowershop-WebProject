<?php
require_once 'config/dbconnect.php';
/* 
Controller i ka funksionet insert delete edit qe komunikon direk me databaze ??
 */
class PorosiaController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from porosia');

        return $query->fetchAll();
    }

    public function insert($request){
        
        $query = $this->db->pdo->prepare('INSERT INTO porosia (firstname, lastname,email, tel, qyteti,adresa,produkti,sasia)
        VALUES (:firstname, :lastname, :email,:tel,:qyteti,:adresa,:produkti,:sasia)');

        $query->bindParam(':firstname', $request['firstname']);
        $query->bindParam(':lastname', $request['lastname']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':tel', $request['tel']);
        $query->bindParam(':qyteti', $request['qyteti']);
        $query->bindParam(':adresa', $request['adresa']);
        $query->bindParam(':produkti', $request['produkti']);
        $query->bindParam(':sasia', $request['sasia']);
        $query->execute();

        echo '<script>alert("Porosia u krye me sukses")</script>';
        return header('Location: index.php');
    }

   

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from porosia WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: views/dashboard.php");
    }
}
?>