<?php
session_start();


require_once 'controller/dashboard_controller.php';
$instructor = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-1.css">
	<?php require_once 'js/editprofileJS.php'; ?>
	<style type="text/css">
	</style>
</head>
<body>
<?php



 if(!isset($_SESSION['epnameEr']))
 {
   $_SESSION['epnameEr']="";
 }


 if(!isset($_SESSION['epcontactnoErr']))
 {
   $_SESSION['epcontactnoErr']="";
 }

 if(!isset($_SESSION['epemailErr']))
 {
   $_SESSION['epemailErr']="";
 }
$epname = $epemail =  $epcontactno="";
 ?>

	<?php
	include('I-top.php');
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
				      <img src="img/neon.jpg" height="200" width="200"><br><br>
                  <form action="controller/editProfile_controller.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()">				    
					<meta><b>Name :</b> 
					  <input type :"text" value="<?php echo $instructor['Name'] ?>" name="name" id="name" onkeyup="checkName()" onblur="checkName()"></meta>
					  <br><span id="nameErr"></span> <span class="error" >* <?php echo $_SESSION['epnameEr'];?></span><br>
				     
				      <meta><b>EMAIL :
					  <input type :"text" value="<?php echo $instructor['Email'] ?>" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"></b></meta>
					  <br> <span id="emailErr"></span> <span class="error" >* <?php echo $_SESSION['epemailErr'];?></span><br>
				     
				      <meta><b>CONTACT NO : 
					  <input type :"text" value="<?php echo$instructor['ContactNo'] ?>" name="contactno" id="contactno" onkeyup="checkContactno()" onblur="checkContactno()"></b></meta>
					  <br> <span id="contactnoErr"></span><span class="error" >* <?php echo $_SESSION['epcontactnoErr'];?></span><br>

				      <input type="submit" name="submit" value="Update">
      			</form>
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
if(isset($_SESSION['epnameEr']) || isset($_SESSION['epemailErr'])   || isset($_SESSION['epcontactnoErr']) )
 {
$_SESSION['epnameEr']=$_SESSION['epemailErr']=$_SESSION['epcontactnoErr']="";
 }

  ?>