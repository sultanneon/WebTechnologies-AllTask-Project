<!DOCTYPE html>
<html >
  <head>
    <title></title>
  </head>
  <body>
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
	 
    <fieldset align="center">
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
      </form>
    </fieldset>
  </body>
</html>
