<!DOCTYPE html>
<html> <title> Upload Form </title>
<body>
 
    <?php	
        $target_dir = "Uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
       if(isset($_POST["submit"])) 
	   {
       if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png") 
	   {       echo " Only JPG, JPEG, PNG  files can be uploaded.";
       $uploadOk = 0;
       }

	   
	   if ($uploadOk == 0) 
	    {  
         echo "File couldn't not upload.";
		 
        } 
		else 
		{
             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
			 {   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " uploaded.";
             } 
			 else 
			 {
                echo  "There was an error to upload the file.";
             }			 
	   }}
?>
</body>
</html>