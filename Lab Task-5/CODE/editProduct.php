<?php 
require_once 'controller/displayProduct_Controller.php';
$product = fetchProduct( $_GET['id']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<form action="controller/editProduct_Controller.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <fieldset>
<legend>EDIT PRODUCT</legend> <br>
  <label>Name:</label>
  <input type="text" name="name" value="<?php echo $product['Name']; ?> " > <br>
  <label>Buying Price:</label>
  <input type="text" name="buyingPrice" value="<?php echo $product['BuyingPrice']; ?> " > <br>
  <label>Selling Price:</label>
  <input type="text" name="sellingPrice" value="<?php echo $product['SellingPrice']; ?> " > <br>
  <input type="checkbox" name="display" value="Yes" <?php if($product['Display']=='Yes'){echo 'checked';} ?> >Display<br><hr>
  <input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>
<?php 
