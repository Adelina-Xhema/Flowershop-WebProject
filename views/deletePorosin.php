<?php
require_once '../porosiaController.php';

if(isset($_GET['id'])){
	$Porosia=$_GET['id'];

}
$porosia=new PorosiaController;
$porosia->delete($Porosia);

header('Location: dashboard.php');

?>