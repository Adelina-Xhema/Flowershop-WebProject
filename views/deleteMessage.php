<?php
require_once '../ContactController.php';

if(isset($_GET['id'])){
	$Mesazhi=$_GET['id'];

}
$mesazhet=new ContactController;
$mesazhet->delete($Mesazhi);

header('Location: dashboard.php');

?>