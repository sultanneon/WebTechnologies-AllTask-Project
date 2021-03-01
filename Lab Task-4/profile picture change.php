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
		   
            <h4>
            <ul>
			  <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/page%20dashboard.php"> Dashboard   </a></li>
                <li> <a href= "http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/View%20Profile.php"> View Profile </a> </li>
                <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/edit%20profile.php"> Edit Profile </a></li>
				<li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/profile%20picture%20change.php">Change Profile Picture</a> </li>
                <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/password%20change.php">Change Password</a> </li>
                <li> <a href="http://localhost/WebTech,Lab/Lab%20task-4/Lab%20Task%20(Tofayet)/Login.php">Logout</a> </li>
          
		     </ul>  
		     <h4/>

    <form action="upload.php" method="post" enctype="multipart/form-data"> <br>
   
        <h1 align="center"> PROFILE PICTURE </h1>
		
		  <h3 align="center"> 
		  
             <img  src="profile_pic.png" height="200px" width="250px"  title="profile pic"> </img> <br>
			 
        <input type="file" name="fileToUpload" id="fileToUpload"> <br> <br>
  
        <div>
         
             <input type="submit" name="submit" value="Submit" >
			 <hr>
       </div>
	    </h3> 
		
		<div align="center">
		  
		           <h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2017);?> </span> </h4>
		   
		   </fieldset>
		        </div>
				
                 <br>
    </form>

   </body>
</html>