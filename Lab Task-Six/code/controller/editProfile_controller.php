<?php 
session_start();

require_once '../model/model.php';

if(isset($_POST['submit'])) {
	$data['username'] = $_POST['username'];
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['contactno'] = $_POST['contactno'];
	
  if (updateProfile($data['username'],$data)) {
  	header('Location: ../viewProfile_view.php');
  }
} 
else {
	echo '<p>You are not allowed to proceed</p>';
}

 ?>
