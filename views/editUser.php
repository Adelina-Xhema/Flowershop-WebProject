<?php
require_once '../UserController.php';
if(isset($_GET['id'])){
	$userid=$_GET['id'];

}
$user=new UserController;
$currenUser = $user->edit($userid);

if(isset($_POST['submit'])){
	$user->update($_POST,$userid);
    return header('Location: dashboard.php');
}

?>
<style>

.container h1{
    text-align:center;
	margin-top:80px;
}
.container{
    margin-top:56px;
    width:100%;
    height:580px;
    background-color:#ebadd6;
}
.container .row{
    background-color:#df9f9f;
    border:1px black solid;
    max-width:270px;
    height:280px;
    padding:20px 50px;
    margin:40px auto 40px auto;
    border-radius:15px;
    text-align:center;
    margin-top:20px;
    margin-left:36%; 
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.2);
    border:.3rem solid rgba(0,0,0,.1);
    background-color: transparent;  
}
.submitbtn{
    display: inline-block;
    margin-top:16px;
    border-radius:10px;
    background: #333;
    color: #fff;
    padding:13px;
    font-size:15px;
    width:105px;
    height:45px;
    margin-left:33%;
}
.row input{
    padding:7px;
}
.header-div .list-div{
    position:relative;
     left:25%;
     text-decoration: none;
}
	</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edito</title>
    <link rel="stylesheet" href="../includes/header.css">
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
<div class="container">
        <h1>Edito te dhenat e userit</h1>
        <form method= "POST" >
          <div class="row">

           <label> Emri:</label><br>
			<input type="text" class="form-control" id="Name" name="firstname" value="<?php echo $currenUser['firstname'];?>"><br>
            
			<label> Mbiemri:</label><br>
			<input type="text" class="form-control" id="mbiemri" name="lastname" value="<?php echo $currenUser['lastname'];?>"><br>
            
            <label>Email:</label><br>
			<input type="email" id="userEmail" name="email" value="<?php echo $currenUser['email'];?>"> <br>
  
			<label>Password:</label><br>
			 <input type="password" id="userPassword" name="passwordi" value="<?php echo $currenUser['passwordi'];?>"><br>
            
			<label>Roli:</label><br>
           <input type="input" name="roli" value="<?php echo $currenUser['roli'];?>"><br>
			<br>
		   <button class="btnregister" name="submit" value="Update">Update</button>


            </div>
        </form>
      </div>
</body>
</html>


