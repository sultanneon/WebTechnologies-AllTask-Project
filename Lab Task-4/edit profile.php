<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 align="center">  X  <sub style="color:black">Company </sub> </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as<a href= "http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/View%20Profile.php"> Bob | </a>
		       <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/Login.php">Logout</a>   
		   </h3>  
		<fieldset>
	      <h2> <u> Account </u> </h2> 
		   
            <ul>
			<li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/page%20dashboard.php"> Dashboard   </a></li>
                <li> <a href= "http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/View%20Profile.php"> View Profile </a> </li>
                <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/edit%20profile.php"> Edit Profile </a></li>
				<li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/profile%20picture%20change.php">Change Profile Picture</a> </li>
                <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/password%20change.php">Change Password</a> </li>
                <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/Login.php">Logout</a> </li>
      
		     </ul>  
		     <h4/>
    <?php
         
        $nameErr = $emailErr = $genderErr = $date_of_birthErr = " ";
        $name = $email = $gender = $date_of_birth = " "; 
		

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
             if (empty($_POST["name"])) 
		     {
               $nameErr = "Name is required!";
             } 
		  
		    else 
		    {
               $name = test_input($_POST["name"]);
            }
  
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format! ";
               }
            }
    
	         if(empty($_POST["gender"])) 
		    {
               $genderErr = "Gender is required!";
            } 
		    else 
		    {
             $gender = test_input($_POST["gender"]);
            }
	      
	
	        if(empty($_POST["date_of_birth"])) 
		    {
                $date_of_birthErr = "Date of birth is required!";
            } 
		    else 
		    {
               $date_of_birth = test_input($_POST["date_of_birth"]); 
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
		  
		   
		   
		       <h1 align="center"> EDIT PROFILE </h1>
		       <p align="center">
		       <b> <p align="center" <label for="name"> Name : </label> </b> 
			   <input type="text" name="name" value="<?php echo $name;?>"> 
			   <span class="error"> * <?php echo $nameErr; ?> </span> 
               <br> <br>
			    <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span> 
                <br> <br>
		        <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other  
                <span class="error"> * <?php echo $genderErr;?></span> 
                <br> <br>  
	            <b><p align="center" <label for="date_of_birth"> Date Of Birth : </label> </b>
                <input type="date" name="date_of_birth" value="<?php echo $date_of_birth;?>">
		        <span class="error"> * <?php echo $date_of_birthErr;?></span>
                <br> <br>
    
                 <input type="submit" name="submit" value="Submit"> 
				  <hr>
                 </p>
				 
				<div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> </span> </h4>
		          </fieldset>
	        </div>
				
                </form> <br>
	

    
    </body>
</html>