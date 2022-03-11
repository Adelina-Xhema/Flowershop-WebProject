<?php

require_once 'config/dbconnect.php';
require_once 'produkti.php';


class ProduktiController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM products');
        return $query->fetchAll();
    }
    public function insert($request){
        $request['image'] = '../Images/'.$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO products(image,productName,pershkrimi,qmimi) VALUES (:image, :productName, :pershkrimi, :qmimi)');

        $query->bindParam(':image', $request['image']);
        $query->bindParam(':productName', $request['productName']);
        $query->bindParam(':pershkrimi', $request['pershkrimi']);
        $query->bindParam(':qmimi', $request['qmimi']);        
        $query->execute();

        header("Location:views/dashboard.php");
    }
    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from products WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $request['image'] = '../Images/'.$request['image'];
        $query = $this->db->pdo->prepare('UPDATE products SET image=:image, pershkrimi=:pershkrimi, qmimi=:qmimi WHERE id=:id');
        $query->bindParam(':image', $request['image']);
        $query->bindParam(':pershkrimi', $request['pershkrimi']);
        $query->bindParam(':qmimi', $request['qmimi']);
        $query->bindParam(':productName', $productName);
        $query->bindParam(':id', $id);

        $query->execute();
        header("Location: views/dashboard.php");
    }
    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from products WHERE id = :id');
        $query->bindParam(':id',$id);
        $query->execute();

        return header('location: views/dashboard.php');
    }
}
?>