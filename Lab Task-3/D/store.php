<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $nameError = "<label class='text-danger'>Enter Name</label>";  
      }  
     else if(empty($_POST["email"]))  
      {  
           $emailError = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $usernameError = "<label class='text-danger'>Enter Username</label>";  
      }  
	  else if(empty($_POST["password"]))  
      {  
           $passwordError = "<label class='text-danger'>Enter Password</label>";  
      }  
      else if(empty($_POST["cpassword"]))  
      {  
           $cpasswordError = "<label class='text-danger'>Confirm the given password</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $genderError = "<label class='text-danger'>Select your gender</label>";  
      } 
	   else if(empty($_POST["dob"]))  
      {  
           $dobError = "<label class='text-danger'>Enter date of birth</label>";  
      } 
	  
      else  
      {  
               $n=$_POST['name'];
			   $p=$_POST['password'];
			   $cp=$_POST['cpassword'];
			   
			   
			   
              if(!preg_match("/^[a-zA-Z ]*$/",$n)) 
		       {
                 $nameError = "Only letters and white spaces allowed here!";
               }      
              else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailError = "Invalid email format and must be like -----@*****.Com! ";
               }
			   else if(!$_POST['password']==111) 
		       {
                  $passwordError = "Wrong password ";
               }
			   else if(!$cp==$p) 
		       {
                  $cpasswordError = "Have to confirm password ";
               }
             else if(file_exists('data.json'))  
              {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'         =>     $_POST['name'],  
                     'email'        =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],  
					 'password'     =>     $_POST["password"],  
                     'cpassword'    =>     $_POST["cpassword"], 
					 'gender'       =>     $_POST["gender"], 
				     'dob'          =>     $_POST["dob"] 
					 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label >File Appended Successfully</p>";  
                }  
              }  
             else  
             {  
                $error = 'JSON File not exits';  
             }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post"> 
                     <fieldset>	
                     <legend><b>Registration Form</b></legend>					                    
                     <br />  
                     <label>Name:</label>  
                     <input type="text" name="name" class="form-control" />  
					 <span style="color:red">
					  <?php
					 if(isset($nameError))  
                     {  
                          echo $nameError;  
                     }  
                     ?>
                     </span>
					 <hr/>             
                     <label>Email:</label>  
                     <input type="text" name="email" class="form-control" />
					 <span style="color:red">
					  <?php
					 if(isset($emailError))  
                     {  
                          echo $emailError;  
                     }  
                     ?>
					 </span> 
					 <hr/>                      
                     <label>Username:</label>  
                     <input type="text" name="username" class="form-control" /> 
                     <span style="color:red">                       
					   <?php
					 if(isset($usernameError))  
                     {  
                          echo $usernameError;  
                     }  
                     ?> 
					 </span>
					 <hr/> 
					 <label>Password:</label>  
                     <input type="text" name="password" class="form-control" /> 
                        <span style="color:red"> 
						<?php
					 if(isset($passwordError))  
                     {  
                          echo $passwordError;  
                     }  
                     ?>
                     </span>
					 <hr/> 
					 <label>Confirm Password:</label>  
                     <input type="text" name="cpassword" class="form-control" /> 
                         <span style="color:red"> 
						 <?php
					 if(isset($cpasswordError))  
                     {  
                          echo $cpasswordError;  
                     }  
                     ?> </span>
					 <hr/> 
					 <fieldset>
					 
                     
					 <fieldset>
					             <legend>Gender</legend>
                                    
			                             <input type="radio" name="gender"  value="Male">Male
			                             <input type="radio" name="gender"  value="Female">Female	
										  <input type="radio" name="gender"  value="Other">Other	
                       <span style="color:red"> 
					  <?php
					  if(isset($genderError))  
                     {  
                          echo $genderError;  
                     }  
                     ?>  
                     </span>					 
					 </fieldset>
					 <hr/>
					 <fieldset>
					             <legend>Date of birth</legend>				                
			                          <input type="Date" name="dob" >
					 <span style="color:red"> 
					 <?php
					 if(isset($dobError))  
                     {  
                          echo $dobError;  
                     }  
                     ?>  </span>				  
					  </fieldset>
					  <hr/>
					  <span style="color:red"> 
					   <?php  					 
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> </span>
					  <input type="submit" name="submit" value="Append" class="btn btn-info" />    
					  <input type="reset" value="Reset"  >
					  </fieldset>
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  