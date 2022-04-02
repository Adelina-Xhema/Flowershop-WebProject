<?php
 session_start();
require_once '../ProduktiController.php';
require_once '../UserController.php';
require_once '../ContactController.php';
require_once '../PorosiaController.php';

  $user =  new UserController();
  $allusers = $user->readData();


?>

<style>
*{
  font-family: sans-serif; 
}

.tabela1{
  margin-top:100px;
}

.content-table {
  border-collapse: collapse;
  margin: 10px 10;
  font-size: 0.9em;
  width: 98%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color:#009933;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,.content-table td {
  padding: 10px 12;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 10%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 10px;
    text-decoration: none;
}
td a{
  color:#cc3399;
  text-decoration: none;
 font-weight: bold;

}
</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  </head>
  <body>
  <?php
        if (isset($_SESSION['roli']) && $_SESSION['roli']==1) {
        ?>


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
      

<div class="tabela1" id="produkti">
    <table class="content-table">
      <h2 style="text-align:center; color:#ff3300;">PRODUKTET</h2>
        <thead>
            <tr>
              <th>Id</th>
              <th>Image</th>
              <th>Emri</th>
              <th>Pershkrimi</th>
              <th>Cmimi</th>
             
            </tr>
        </thead>
        <tbody>
          
            <?php 

            $produktet = new ProduktiController;
            $products = $produktet->readData();

            foreach ($products as $product): ?>

            <tr>
              <td><?php echo $product['id']?></td>
              <td><?php echo $product['image']?></td>
              <td><?php echo $product['productName']?></td>
              <td><?php echo $product['pershkrimi']?></td>
              <td><?php echo $product['qmimi']?>$</td>
             
              <td><a href="deleteProduct.php?id=<?php echo $product['id'];?>">Delete</a></td>
            </tr>
          <?php endforeach;?>
          <tr><td colspan="5"><a style="font-size:19pt; text-decoration: none; color:#6600ff; " href="addProduct.php" id="newProduct">Add product</a></td></tr>
          
        </tbody>
        
    </table>
</div>
<br>
<div class="tabela2">

     <h2 style="text-align:center; color:#ff3300;">USERS</h2>
    <table class="content-table">
        <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Password</th>
              <th>Role</th>
              
            </tr>
        </thead>
        <tbody>

            <?php

            $users = new UserController;
            $allusers = $users->readData();
        
            foreach ($allusers as $user): ?>

            <tr>
              <td><?php echo $user['id']?></td>
              <td><?php echo $user['firstname']?></td>
              <td><?php echo $user['lastname']?></td>
              <td><?php echo $user['email']?></td>
              <td><?php echo $user['passwordi']?></td>
              <td><?php echo $user['roli']?></td>
              <td id="edit"><a href="editUser.php?id=<?php echo $user['id'];?>">Edit</a></td>
              <td id="delete"><a href="deleteUser.php?id=<?php echo $user['id'];?>">Delete</a></td>
            </tr>
          <?php endforeach;?>

        </tbody>
        <body>
    </table>
</div>
<br>

<div class="tabela3">

     <h2 style="text-align:center; color:#ff3300;">POROSIT</h2>
    <table class="content-table">
        <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Qyteti</th>
              <th>Adresa</th>
              <th>Tel</th>
              <th>Produkti</th>
              <th>Sasia</th>
              
            </tr>
        </thead>
        <tbody>

            <?php

            $porosit = new PorosiaController;
            $allPorosit = $porosit->readData();
        
            foreach ($allPorosit as $porosia): ?>

            <tr>
              <td><?php echo $porosia['id']?></td>
              <td><?php echo $porosia['firstname']?></td>
              <td><?php echo $porosia['lastname']?></td>
              <td><?php echo $porosia['email']?></td>
              <td><?php echo $porosia['qyteti']?></td>
              <td><?php echo $porosia['adresa']?></td>
              <td><?php echo $porosia['tel']?></td>
              <td><?php echo $porosia['produkti']?></td>
              <td><?php echo $porosia['sasia']?></td>

              <td id="delete"><a href="deletePorosin.php?id=<?php echo $porosia['id'];?>">Delete</a></td>
            </tr>
          <?php endforeach;?>

        </tbody>
        <body>
    </table>
</div>




<br>
<div class="tabela4">

   <h2 style="text-align:center; color:#ff3300;">CONTACT MESSAGE</h2>
    <table class="content-table">
        <thead>
            <tr>
              <th>id</th>
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Email</th>
              <th> Ky eshte Mesazhi </th>
             
            </tr>
        </thead>
        <tbody>
          <body>
            <?php 

            $c=new ContactController;
            $allContact=$c->readData();

            foreach ($allContact as $contact): ?>


            <tr>
              <td><?php echo $user['id']?></td>
              <td><?php echo $contact['emri']?></td>
              <td><?php echo $contact['mbiemri']?></td>
              <td><?php echo $contact['email']?></td>
              <th><?php echo $contact['mesazhi']?></th>
              <td><a href="deleteMessage.php?id=<?php echo $contact['id'];?>">Delete</a></td>
            </tr>
          <?php endforeach;?>

          </body>

        </tbody>

    </table>
</div>
<br>
&nbsp;
  </body>
  <?php include '../includes/footer.php' ?>
  <?php
        }
    ?>
  </html>

