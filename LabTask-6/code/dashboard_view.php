
<?php
session_start();

$s=$_SESSION['username'];


?>
<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 align="center">  LEARNING CS </sub> </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $s; ?>|
		       <a href="logout_view.php">Logout</a>   
		   </h3>  
		<fieldset>
		
		   <h2> <u> Account </u> </h2> <span style="color: rgb(255, 255, 255);"> ***********</span> <h1 align="center" > Welcome <?php echo $s; ?>  <h1/>
            <h4>
            <ul>
                <li> <a href="dashboard_view.php"> Dashboard   </a></li>
                <li> <a href= "viewProfile_view.php"> View Profile </a> </li>
                <li> <a href="editProfile_view.php"> Edit Profile </a></li>
                <li> <a href="changePassword_view.php">Change Password</a> </li>
                <li> <a href="logout_view.php">Logout</a> </li>
      
		     </ul>  
		     </h4>
		     <hr>
		
	    <div align="center">
		    <h4> <span style="color: rgb(140, 140, 140);"> Copyright @ <?php echo date(2017);?> <span/> <h4/>
		   </fieldset>
		 </div>  
	 </body>
	 
</html>	 