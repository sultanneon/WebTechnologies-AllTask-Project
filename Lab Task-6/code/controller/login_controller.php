<?php  
session_start();
require_once '../model/model.php';


if (isset($_POST['submit']))
{
	
	if(isset($_POST['rememberMe']))
    {
    $time = time();
    setcookie('username', $_POST['username'], $time+50);
    setcookie('password', $_POST['password'], $time+50);
    }
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	
  if (login($data)) {
  	echo '<b>loged in successfully!</b><br>';
	$_SESSION['username']= $_POST['username'];
 $_SESSION['password']=$_POST['password'];

	header("location:../dashboard_view.php");
  }
 }

	
   
 

else 
{
	echo 'You are not allowed to access this page.';
}

?>