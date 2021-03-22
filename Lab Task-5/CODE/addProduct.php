<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createProduct_Controller.php" method="POST" enctype="multipart/form-data">
 <fieldset>
 <legend>ADD PRODUCT</legend>
 
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buyingPrice">Buying Price:</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>
  <label for="sellingPrice">Selling Price:</label><br><hr>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>
  <input type="checkbox" name="display"  value="Yes" >Display <br><hr>
  <input type="submit" name = "createProduct" value="Save">
 </fieldset>
</form> 

</body>
</html>

