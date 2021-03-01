<!DOCTYPE HTML>  
<html>
  <head >
  <title>LOGIN</title>
    </head >
    <body> 
		     <p> <h1 align="center">  X  <sub style="color:black">Company </sub> </h1> </p>
		       <h3 align= "right">
			      <hr>
		       <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/home%20page.php">  Home |  </a> 
		        <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/Login.php">Login |</a>   
		       <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/store.php">  Registration </a> 
		   </h3>  	
    <?php       
        $usernameError = $passwordErr = "" ;
        $username = $password = ""  ; 		
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["username"])) 
		    {
               $usernameError = "UserName is required!";
            } 		  
		    else 
		    {
               $username = test_input($_POST["username"]);   
                if(!preg_match("/^[a-zA-Z-_ ]*$/",$username)) 
		        {
                 $usernameError = " User Name can contain letter or whitespace only!";
                }				
            }			
            if(empty($_POST["password"])) 
		    {
                $passwordError = "Password is required!";
            } 
			else 
			    {    
		           $password = test_input($_POST["password"]);	
                    if(strlen($password)<= '8')
		            {
                       $passwordError = "At least 8 char required & ";
                    }			
					if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) 
					{
                       $passwordError .= "Password must contain at least 1 special char"."<br>";
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
		  <fieldset>
		  <legend><b>Login</b></legend>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  
		       <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" value="<?php echo $username;?>">			  
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="text" name="password" value="<?php echo $password;?>">              
                <br><br>
				
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
				<a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/page%20dashboard.php"> 
                <input type="button" name="submit" value="Submit"> </a><a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/password.php">Forgot Password?</a>
                
				
				
							    
		   <div align="center">
		     <hr>
		   <p> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> <span/> </p>
		     
		   </div>
 		
         </form> <br><br>
				
            </fieldset>            		
         </form> <br>
	 
    </body>
</html>