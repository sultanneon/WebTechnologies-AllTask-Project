<?php  
require_once '../model/model.php';


if (isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['contactno'] = $_POST['contactno'];
	$data['password'] = $_POST['password'];

  if (addInstructor($data)) {
  	header("location:../login_view.php");
  }

	
   
} 

else 
{
	echo 'You are not allowed to access this page.';
}

?>