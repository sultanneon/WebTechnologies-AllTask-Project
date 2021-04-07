<!DOCTYPE html>
<?php
session_start();
require_once 'controller/viewProfile_Controller.php';
$instructor = fetchProfile($_SESSION['username']);

?>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 align="center">  LEARNING CS </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo  $_SESSION['username']?>|
		       <a href="logout_view.php">Logout</a>     
		   </h3>  
		<fieldset>
	      <h2> <u> Account </u> </h2> 
		   
            <h4> <b>
            <ul>
               <li> <a href="dashboard_view.php"> Dashboard   </a></li>
                <li> <a href= "viewProfile_view.php"> View Profile </a> </li>
                <li> <a href="editProfile_view.php"> Edit Profile </a></li>
                <li> <a href="changePassword_view.php">Change Password</a> </li>
               
      
                 
		     </ul>  
		     <h4/></b> 
		    <h1 align="center"> PROFILE </h1>
			
			<h3 align="center">
		    
			
			
			
		      Name: <span style="color: rgb(255, 255, 255);"> ** </span> <?php echo $instructor['Name']; ?> <br><br>
	          Email: <span style="color: rgb(255, 255, 255);">** </span>  <?php echo $instructor['Email']; ?> <br><br>
		      Contactno:<span style="color: rgb(255, 255, 255);"> ** </span> <?php echo $instructor['ContactNo']; ?> <br><br>
		      Username: <span style="color: rgb(255, 255, 255);"> ** </span> <?php echo $instructor['Username']; ?> <br><br>

			
			</h3>
		  
		   <div align="center">
		   
		    <hr>
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright @ <?php echo date(2017);?> </span> </h4>
		   
		   </div>
		   
	 </body>
	 
</html>	 