
<?php 

require_once '../model/model.php';

if (deleteProduct($_GET['id'])) 
{
    header('Location: ../display.php');
}
else{
	echo '<b>Did not able to delete!!</b>';
}

 ?>