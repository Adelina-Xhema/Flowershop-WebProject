<?php
require_once '../UserController.php';

if(isset($_GET['id'])){
	$userid=$_GET['id'];

}
$user=new UserController;
$user->delete($userid);
header('Location: dashboard.php');
?>
