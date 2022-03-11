<?php

require_once ('ProduktiController.php');

if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['id'])){
    $productName=$_GET['id'];
}
$produktet = new ProduktiController;
$products = $produktet->readData();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produktet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <div class="pink-div" >
      
    <?php include 'includes/header.php'; ?>
    
      <div class="produktet-div">
        <h3 class="heading">Products</h3>
        <div class="produktet">
          <!--  Produktet nga databaza-->

          <?php foreach($products as $product):?>

          <div class="produkti">
            <img src="images/<?php echo $product['image']; ?> " alt="">
            <h2><?php echo $product['productName'];?></h2>
            <p><?php echo $product['pershkrimi'];?></p>
            <p><strong><?php echo $product['qmimi'];?></strong>$</p>
            
            <?php 
        if(isset($_SESSION['roli'])){
        ?>
        <input type="submit" value="Oder now"  class="btn"
            onclick="location.href='contact.php';" />
        <?php
        }
        ?>
            
          </div>

        <?php endforeach;?>
        </div>
      </div>
      
    </body>
    <?php include 'includes/footer.php' ?>
    </html>