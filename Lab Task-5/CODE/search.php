<!DOCTYPE html>
<html>
  <body>
  	<fieldset>
	<legend>SEARCH</legend>  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="Name" value="<?php if (!empty($_POST['Name'])) {echo $_POST['Name'];} ?>" required/>
      <input type="submit" name="findProduct" value="Search By Name"/>
    </form><br>
<?php require_once 'controller/searchProduct_Controller.php'; ?>
</fieldset>
  </body>
</html>