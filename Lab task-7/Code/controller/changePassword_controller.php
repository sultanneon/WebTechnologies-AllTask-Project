<?php 
session_start();
require_once '../model/model.php';

if(isset($_POST['submit'])) {
	$data['npassword'] = $_POST['npassword'];
	$data['username']= $_POST['username'];
  if (updatePass($data)) {
  	header('Location: ../viewProfile_view.php');
  }
} 
else {
	echo '<p>You are not allowed to proceed</p>';
}

 ?>
