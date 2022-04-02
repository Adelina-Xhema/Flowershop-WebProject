<?php
require_once 'PorosiaController.php';

if(!isset($_SESSION)){
  session_start();
}

$porosia = new PorosiaController;
if(isset($_POST['submit'])){
    $porosia->insert($_POST);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Porosia</title>
    <link rel="stylesheet" href="style.css">
    <script type="js/validimi_contact.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="header-div">
      <div class="img-div">
        <a href="index.php"><img src="images/flower1.png" alt="" >
        </div>
        <div class="list-div">
          <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="produktet.php">Products</a></li>
            <li> <a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
      <?php 
        if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
        ?>
        <li><a href="views/dashboard.php">Dashboard</a></li>
        <?php
        }
        ?>

        <?php if(isset($_SESSION['roli'])): ?>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
    <?php endif; ?>

</ul>

  </div>
</div>

      <div class="porosia-div" >
        
        <h1 class="heading"> Porosia</h1>
        
        <div class="porosia">
          <form id="forma_porosia" method="POST" >
            Emri:<br>
            <input type="text" name="firstname" required/>
            <br>
           Mbiemri:<br>
            <input type="text" name="lastname" required/>
            <br>
           Email:<br>
            <input type="email" name="email" required >
            <br>
            Telefoni:<br>
            <input type="text" name="tel" required >
            <br>
            Qyteti:<br>
            <input type="text" name="qyteti" required >
            <br>
            Adresa:<br>
            <input type="text" name="adresa" required >
            <br>
            Produkti:<br>
            <select name="produkti" >
            <option value="Lule Jasmine">Lule Jasmine</option>
            <option value="Lule QuuenBee">Lule QuuenBee</option>
            <option value="Lule Begonia">Lule Begonia</option>
            <option value="Lule Dalia">Lule Dalia</option>
            <option value="Lule Lemonad">Lule Lemonad</option>
            <option value="Lule Orhid">Lule Orhid</option>
            </select><br>
            Sasia:<br>
            <input type="number" name="sasia" required >
            <br>
            <input id="submit" name="submit" type="submit" class="input submit" 
            value="Submit">
          </form>
        </div>
      </div>

 </body>
    <?php include 'includes/footer.php' ?>
    </html>

	<style>
	/*----------------POROSIA-----------------------*/
.porosia input[type=text],input[type=email],input[type=number]{
    background-color:#ffeeee;
    border:1px black solid;
    padding:7px;
    border-radius:10px;
    margin:13px 0;
    text-align:center;
    font-size:12pt;
    width:240px;
    height:16px;
    margin-bottom:10px;
}


.porosia-div{
    height:900px;
    background-image:url(images/flo4.jpg);
}
.porosia-div .heading{
    text-align: center;
     font-size: 40px;
     color: #333;
     padding: 16px;
     margin:36px;
     margin-left:2%;
     margin-top:5%; 
 }
 .porosia{
    display: flex;
    flex-wrap: wrap-reverse;
    align-items: center;
    width:45%;
    margin-left:20%;
    margin-top:1%;
}
.porosia .submit {
    display: inline-block;
    margin-top:16px;
    border-radius:10px;
    background: #333;
    color: #fff;
    padding:13px;
    font-size:15px;
    width:105px;
    height:45px;
    margin-left:30%;
    border:.1px solid rgba(0,0,0,.1);
}
	</style>