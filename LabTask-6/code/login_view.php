<!DOCTYPE HTML>  
<html>
  <head >
  <title>LOGIN</title>
    </head >
    <body> 
		     <p> <h1 align="center">  LEARNING CS </sub> </h1> </p>
		       <h3 align= "right">
			      <hr>
		      <a href="home_view.php">  Home |  </a> 
		       <a href="login_view.php">  Login |  </a>  
		       <a href="registration_view.php">  Registration </a>
		   </h3>  	
    <?php       
  
 
    ?>        
		  <fieldset>
		  <legend><b>Login</b></legend>
          <form action="controller/login_controller.php" method="POST" enctype="multipart/form-data"> 
		  
		  
		       <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" >			  
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="text" name="password" >              
                <br><br>
				
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
				<a href="forgotPassword_view.php">Forgot Password?</a>
                
				
				
							    
		   <div align="center">
		     <hr>
		   <p> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> <span/> </p>
		     
		   </div>
 		
         </form> <br><br>
				
            </fieldset>            		
         </form> <br>
	 
    </body>
</html>