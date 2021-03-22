<?php 

require_once '../model/model.php';

if(isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	
	$p=$_POST['sellingPrice']-$_POST['buyingPrice'];	
	$data['profit']= $p;
	
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}
  if (updateProduct($_GET['id'],$data)) {
  	header('Location: ../display.php');
  }
} 
else {
	echo '<p>You are not allowed to proceed</p>';
}

 ?>
