
	

<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('location:../login_view.php');
}
else
{
  header("location:../login_view.php");
}
 ?>
