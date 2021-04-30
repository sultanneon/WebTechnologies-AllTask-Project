<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-1.css">
	<?php require_once 'js/changepasswordJS.php'; ?>
	<style type="text/css">
	</style>
</head>
<body>
	<?php
	include('I-top.php');
	?>
	<?php



 if(!isset($_SESSION['cpasswordE']))
 {
   $_SESSION['cpasswordE']="";
 }

 if(!isset($_SESSION['npasswordE']))
 {
   $_SESSION['npasswordE']="";
 }
  if(!isset($_SESSION['rnpasswordE']))
 {
   $_SESSION['rnpasswordE']="";
 }

 $cpassword=$npassword=$rnpassword="";
 
 ?>
	<br>
	<div class="container" align="center">
  		<div class="row">
  			<div class="col-4">
  				<?php
				include('I-link.php');
				?>
  			</div>

    		<div class="col-8">
    			<div id="bb"><br>
				 <form  method="post" action="controller/changePassword_controller.php" onsubmit="validateform()">
				      <lebel>Current Password:</lebel> 
					  <input type="password" name="cpassword" id="cpassword" onkeyup="checkPass()" onblur="checkPass()"> *
                  <br> <span id="cpassErr"></span>	<span class="error" > <?php echo $_SESSION['cpasswordE'];?></span><br>					  
			          <br>
			          <lebel style="color:green">New Password:</lebel>
			          <input type="password" name="npassword"  id="npassword" onkeyup="checkNpassword()" onblur="checkNpassword()"> *
                  <br> <span id="npasswordErr"></span>	<span class="error" > <?php echo $_SESSION['npasswordE'];?></span><br>						  
			          <br>
			          <lebel style="color:Red">Retype New Password:</lebel>
			          <input type="password" name="rnpassword" id="rnpassword" onkeyup="checkRnpassword()" onblur="checkRnpassword()" >  *
                  <br> <span id="rnpasswordErr"></span>	<span class="error" > <?php echo $_SESSION['rnpasswordE'];?></span><br>						  
			          <br><hr>
			          <input type="submit" name="submit" value="Submit">
			          <br>
					  </form>
					  <br>
      			</div>
   			</div>
  		</div><br>
	</div>


	<?php
	include('footer.php');
	?>

</body>
</html>
<?php
if(isset($_SESSION['cpasswordE']) || isset($_SESSION['npasswordE'])   || isset($_SESSION['rnpasswordE']))
 {
 $_SESSION['cpasswordE']="";
 $_SESSION['npasswordE']="";
 $_SESSION['rnpasswordE']="";
 }

  ?>