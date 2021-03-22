<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	
	$p=$_POST['sellingPrice']-$_POST['buyingPrice'];	
	$data['profit']= $p;
	
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = "Yes";
	}

  if (addProduct($data)) {
  	echo '<b>Product added successfully!</b><br>';
  	echo "<a href='../display.php'>Display Product</a>";
  }

	
   
} 

else 
{
	echo 'You are not allowed to access this page.';
}

?>