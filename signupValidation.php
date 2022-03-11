<?php
require_once 'UserController.php';

$emri=$_POST['Name'];
$mbiemri=$_POST['mbiemri'];
$email=$_POST['userEmail'];
$passwordi=$_POST['userPassword'];
$confirm=$_POST['confirmPassword'];
$PasswordRegex ="/^[A-Z]{1}[a-z]{4,}\d[0-9]{1,}/";

if(preg_match("/^[A-Z]{1}[a-z]{1,}$/",$emri) == false){
    header("location: logout.php");
}
else if(preg_match("/^[A-Z]{1}[a-z]{1,}$/",$mbiemri) == false){
    header("location: logout.php");
}
else if(strlen($password) < 5){
    header("location: logout.php");
}
else if(preg_match($PasswordRegex, $password) == false){
    header("location: logout.php");
}
else if($password !== $confirm){
    header("location: logout.php");
}
else{
    header("location: index.php");
}

?>