<?php
require_once '../ProduktiController.php';

$products = new ProduktiController;
if(isset($_POST['submit'])){
    $products->insert($_POST);
    return header('Location: dashboard.php');
}

?>
<style>
.prod h1{
    text-align:center;
    margin-top:60px;
}
.prod{
    margin-top:76px;
    width:100%;
    height:580px;
    background-color:#ebadd6;
}
.prod .row{
    background-color:#ebadd6;
    max-width:270px;
    height:460px;
    padding:20px 50px;
    margin:40px auto 40px auto;
    border-radius:15px;
    text-align:center;
    margin-top:20px;
    margin-left:36%; 
    box-shadow: 0 .5rem 0.5rem rgba(0,0,0,.2);
    border:.3rem solid rgba(0,0,0,.1);
    background-color: transparent;  
}
    
    
.submit{
    display: inline-block;
    margin-top:16px;
    border-radius:10px;
    background-color:#d1d1e0;
    color: #333;
    padding:13px;
    font-size:15px;
    width:45px;
    height:45px;
    margin-right:15%;
    margin-left:15%;
}
.row input{
    padding:8px;
    width:500px;
    height:37px;
}
.header-div .list-div{
    position:relative;
     left:28%;
     text-decoration: none;
}

    </style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edito</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="header-div">
      <div class="img-div">
        <a href="../index.php"><img src="../images/flower1.png" alt="" >
        </div>
        <div class="list-div">
          <ul class="nav-list">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../produktet.php">Products</a></li>
            <li> <a href="../about.php">About</a></li>
            <li><a href="../contact.php">Contact</a></li>
           <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </div> 

<div class="prod" >
            <h1>Shto produkt</h1>

    <form method="POST">
        <div class="row">
        Image:
        <input type="file" name="image">
        <br>
        ProductName:
        <input type="text" name="productName">
        <br>
        Pershkrimi:
        <input type="text" name="pershkrimi">
        <br>
        Cmimi:
        <input type="text" name="qmimi">
        <br>
        <input type="submit" class="submit" name="submit" value="Save">
    </form>
</div>
</div>
