<?php
session_start();


?>
<!DOCTYPE html>
<html> <title> Upload File </title>
<body>
      
		     <p> <h1 align="center">  LEARNING CS  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as<?php echo $_SESSION['username']?> | </a>
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


    <h3 align="center"> </h3>
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  action="controller/changePassword_controller.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data">
	    <h3 align="center"> </p>
			  
		  <lebel>Current Password:</lebel> 
		  <input type="text" name="cpassword">        
          <br>
          <lebel style="color:green">New Password:</lebel>
          <input type="text" name="password" >         
          <br>
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="text" name="rnpassword" >        
          <br><hr>
          <input type="submit" name="submit" value="Submit">
          <br>
		  
		  </h3>
      </form>
      <div align="center">
		  
		<h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> </span> </h4>
		   
		   </fieldset>
		        
	  
  </body>
</html>
