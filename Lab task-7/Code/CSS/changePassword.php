<!DOCTYPE html>
<html>
<head>
	<title>View profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css"></style>
</head>
<body>
	<?php
	include('top.php');?>
	<br>
	<div class="container" align="center">
  		<div class="row">
  			<div class="col-4">
  			<?php
			include('link.php');?></div>
    		<div class="col-8">
    			<div id="bb"><br>
				      <lebel>Current Password:</lebel> 
					  <input type="text" name="cpassword">        
			          <br>
			          <lebel style="color:green">New Password:</lebel>
			          <input type="text" name="npassword" >         
			          <br>
			          <lebel style="color:Red">Retype New Password:</lebel>
			          <input type="text" name="rnpassword" >        
			          <br><hr>
			          <input type="submit" name="submit" value="Submit">
			          <br>
      			</div></div>
				</div><br>
	</div>
	<?php
	include('footer.php');
	?>
</body>
</html>