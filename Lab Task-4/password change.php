<!DOCTYPE html>
<html> <title> Upload File </title>
<body>
      
		     <p> <h1 align="center">  X  <sub style="color:black">Company </sub> </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as<a  href= "http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/View%20Profile.php"> Bob | </a>
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
   $cpassword=$npassword=$rnpassword="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpassword"]))
	 {
       $cpasswordErr = "Current Password required";
     }
     else
		 {
      $cpassword = test_input($_POST["cpassword"]);

        if (strcmp($cpassword,"abcd"))
	    {
          $cpasswordErr = "Incorrent Password";
        }      
	   }
        if (empty($_POST["npassword"])) 
		{
          $npasswordErr = "New Password required";
        }
        else 
		{
         $npassword = test_input($_POST["npassword"]);

          if (!strcmp($npassword,"abcd"))
       	  {
             $npasswordErr = "Current and New Password have to be different";
           }
         }
           if (empty($_POST["rnpassword"]))
		   {
             $rnpasswordErr = "Retype new Password required";
           }
           else 
		   {
            $rnpassword = test_input($_POST["rnpassword"]);

             if (strcmp($npassword,$rnpassword)) 
			 {
                $rnpasswordErr = "Retype password and New Password have to be same";
              }
            }
   }
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
     ?>
	 
    <h3 align="center"> </h3>
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    <h3 align="center"> </p>
          <lebel>Current Password:</lebel> 
		  <input type="text" name="cpassword" value="<?php echo $cpassword;?>">        
          <br>
          <lebel style="color:green">New Password:</lebel>
          <input type="text" name="npassword" value="<?php echo $npassword;?>">         
          <br>
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="text" name="rnpassword" value="<?php echo $rnpassword;?>">        
          <br><hr>
          <input type="submit" name="submit" value="Submit">
          <br>
		  
		  </h3>
      </form>
      <div align="center">
		  
		<h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> </span> </h4>
		   
		   </fieldset>
		        </div>
				
                 <br>
	  
  </body>
</html>
