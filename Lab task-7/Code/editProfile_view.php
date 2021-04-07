<?php
session_start();


require_once 'controller/viewProfile_controller.php';
$instructor = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 align="center">  LEARNING CS  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as<?php echo $_SESSION['username']?>|
		       <a href="logout_view.php">Logout</a>   
		   </h3>  
		<fieldset>
	      <h2> <u> Account </u> </h2> 
		   
            <ul>
			 <li> <a href="dashboard_view.php"> Dashboard   </a></li>
                <li> <a href= "viewProfile_view.php"> View Profile </a> </li>
                <li> <a href="editProfile_view.php"> Edit Profile </a></li>
                <li> <a href="changePassword_view.php">Change Password</a> </li>
                <li> <a href="logout_view.php">Logout</a> </li>
      
		     </ul>  
		     <h4/>
   
    
          <form action="controller/editProfile_controller.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data"> 
		  
		   
		   
		       <h1 align="center"> EDIT PROFILE </h1>
		       <p align="center">
		      <label>Name:</label>
              <input type="text" name="name" value="<?php echo $instructor['Name']; ?> " > <br>
              <label>Email:</label>
              <input type="text" name="email" value="<?php echo $instructor['Email']; ?> " > <br>
              <label>Contactno:</label>
              <input type="text" name="contactno" value="<?php echo $instructor['ContactNo']; ?> " > <br>
			   <label>Username:</label>
              <input type="text" name="username" value="<?php echo $instructor['Username']; ?> " > <br>
			  
              <input type="submit" name="submit" value="Save">
				  <hr>
                 </p>
				 
				<div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> </span> </h4>
		          </fieldset>
	        </div>
				
                </form> <br>
	

    
    </body>
</html>