<?php
    
    require_once 'UserController.php';
?>
<?php
    $user = new UserController;

    if(isset($_POST['submit'])) {
        $user->login($_POST);
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kyqu</title>
    <script src="js/validimi_login.js"></script></script>
    <style type="text/css">
    body{
    background-image:url(images/vv.jpg);
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  </head>
  <body>
    
  <?php include 'includes/header.php'; ?>
  
      <div class="login-div">
        <h1 class="login">Log in</h1>
        <div class="main">
          <form name="myform" method="POST" action="loginValidation.php" >
            Email:<br><input type="email" name="email"  id="userEmail"  required><br>
            Password:<br><input type="password" name="passwordi" id="userPassword" required><br>
            <input  class="btn" name="submit" type="submit" value="Log in" onclick="return validateform()">
          </form>
        </div>
      </div>
      
    </body>
    <?php include 'includes/footer.php';?>
    </html>
