  <!DOCTYPE HTML>  
<html>
  <head> <title> FORGOT PASSWORD </title>
    </head>
    <body>  
		     <p> <h1 align="center">  X  <sub style="color:black">Company </sub> </h1> </p>
		       <h3 align= "right">
			      <hr>
		       <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/home%20page.php">  Home |  </a> 		   
		       <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/Login.php">Login |</a>  
		       <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/store.php">  Registration </a>
		   </h3>  
<?php
           
        $emailErr =  " ";
        $email =  " "; 

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
            if(empty($_POST["email"])) {
                $emailErr = "Email is required!";
            } 
		   else {
               $email = test_input($_POST["email"]);
	  
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                  $emailErr = "Invalid email format! ";
               }
            }  
        }


        function test_input($data) 
		{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		      <fieldset>	
		     <br> <br>
			    <p align="left">
				
			    <b> <label for="email"> Enter Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span>
                <br><br>
                 <input type="submit" name="submit" value="Submit">  
				</p>
				 <hr>
				 
		   <div align="center">
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> <span/> </h4>
		     
		   </div>
				
         </form> <br>
	     </fieldset>	

    
         
    </body>
</html>