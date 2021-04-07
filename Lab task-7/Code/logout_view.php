<?php

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:home_view.php");

}

else{
	header("location:home_view.php");
}

 ?>
