<?php

require_once ('ProduktiController.php');

$produktet = new ProduktiController;
$products = $produktet->readData();

if(!isset($_SESSION)){
  session_start();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FlowerShop-AdelinaXhema</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="pink-div" >
      
    <?php include 'includes/header.php'; ?>
    
       <div class="content-div">
          
          <h5><b>Order Flowers<b></h5>
          
          <p>To share a flower is to share the happiness.</p>
          <a href="produktet.php" class="button"> Order now</a>
        </div>
      </div>
      <div class="best-selling">
        <h1 class="heading">Best selling products</h1>
        <div class="produktet">

        <?php
           $BestSellingProducts = array_slice($products,0,3);
           
          foreach($BestSellingProducts as $product):?>

          <div class="produkti">
            <img src="images/<?php echo $product['image']; ?> " alt="">
            <h2><?php echo $product['productName'];?></h2>
            <p><?php echo $product['pershkrimi'];?></p>
            <p><strong><?php echo $product['qmimi'];?></strong>$</p>
            
          </div>
        <?php endforeach;?>
        </div>
      </div>
    </div>
  </body>
  <?php include 'includes/footer.php' ?>
  </html>