<!DOCTYPE HTML>  
<html>
  <head >
  <title>REGISTRATION </title>
    </head >
    <body>
		     <p> <h1 align="center"> LEARNING CS </sub> </h1> </p>
		       <h3 align= "right">
			      
		     <a href="home_view.php">  Home |  </a> 
		       <a href="login_view.php">  Login |  </a>  
		       <a href="registration_view.php">  Registration </a><hr>
		   </h3>  	

<?php  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          
      </head>  
      <body>  
           <br />  
                           
                <form action="controller/registration_controller.php" method="POST" enctype="multipart/form-data"> 
                     <fieldset>	
                     <legend><b>Registration </b></legend>					                    
                     <br />  
                     <label>Name:</label>  
                     <input type="text" name="name">  
					 <hr/>             
                     <label>Email:</label>  
                     <input type="text" name="email" >
					 <hr/>                      
                     <label>Username:</label>  
                     <input type="text" name="username" > 
					 <hr/> 
					 <label>Password:</label>  
                     <input type="text" name="password" >                       
					 <hr/> 
					 <label>Confirm Password:</label>  
                     <input type="text" name="cpassword"> 
					 <hr/> 
					  <label>Contactno:</label>  
                     <input type="text" name="contactno" > 
					 <hr/>
					 
					  <input type="submit" name="submit" value="Append" class="btn btn-info" />    
					  <input type="reset" value="Reset"  >
					  <hr>
					  				    
		             <div align="center">
		             
		             <p> <span style="color: rgb(140, 140, 140);"> Copyrightn @  <?php echo date(2017);?> <span/> </p>
		     
		             </div>
					   
					  </fieldset>
                </form>  
            
           <br />  
      </body>  
 </html>  