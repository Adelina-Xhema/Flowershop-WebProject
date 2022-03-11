<?php

session_start();
require 'UserController.php';

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $passwordi = $_POST['passwordi'];

    if(validateEmptyData($email,$passwordi)){
        header("Location: login.php");
        
    } else if(validationData($email,$passwordi)){
        if($_SESSION['roli']==1){
            header("location:views/dashboard.php");
        }else{
            header("location:index.php");
        }
    }
     else {
        header("Location: login.php");  
    }
}

function validateEmptyData($email, $passwordi){
    if(empty($email) || empty($passwordi)){
        return true;
    }
    return false;
}

function validationData($email,$passwordi){
    
    $dhenat = new UserController();
    $allUsers = $dhenat->readData();

    foreach($allUsers as $user){
        if($user['email']===$email && $user['passwordi']===$passwordi){
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['roli'] = $user['roli'];
            return true;
        }
    }
    return false;
}
?>