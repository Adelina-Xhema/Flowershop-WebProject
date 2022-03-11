<?php
require_once '../ProduktiController.php';

if(isset($_GET['id'])){
	$Product=$_GET['id'];

}
$products=new ProduktiController;
$products->delete($Product);

header('Location: dashboard.php');

?>
