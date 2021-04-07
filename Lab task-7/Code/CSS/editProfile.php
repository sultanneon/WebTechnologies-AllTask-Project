<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-1.css">
	<style type="text/css">
	</style>
</head>
<body>
	<?php
	include('top.php');?><br>
	<div class="container" align="center">
  		<div class="row">
  			<div class="col-4">
  				<?php
				include('link.php');?>
  			</div>
    		<div class="col-8">
    			<div id="bb"><br>
				      <img src="neon.jpg" height="200" width="200"><br><br>
				      <b>Name :</b> <input type :"text" /></meta><br><br>
				      <b>ID:</b> <input type :"text" /></meta><br><br>
				      <b>Email: <input type :"text" /></b></meta><br><br>
				      <b>Contact no: <input type :"text" /></b></meta><br><br>
					  <input type="submit" name="submit" value="Submit">
      			</div>
   			</div>
  		</div><br>
	</div>
	<?php
	include('footer.php');?>
</body>
</html>