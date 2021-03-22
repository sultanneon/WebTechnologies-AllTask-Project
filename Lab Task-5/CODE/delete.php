<?php if(!empty($_GET['id'])){ ?>

<?php 

require_once 'controller/displayProduct_Controller.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<fieldset>
<legend>DELETE PRODUCT</legend> <br>
<form action="controller/deleteProduct_Controller.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
 <label>Name:</label>
 <?php echo $product['Name']; ?> <br>
 <label>Buying Price:</label>
 <?php echo $product['BuyingPrice']; ?> <br>
 <label>Selling Price:</label>
 <?php echo $product['SellingPrice']; ?> <br>
 <label>Displayable:</label>
<?php echo $product['Display']; ?><hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "You are not allowed to enter";
} ?>