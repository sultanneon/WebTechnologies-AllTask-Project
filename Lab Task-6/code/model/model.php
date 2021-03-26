<?php 

require_once 'db_connect.php';

function searchProduct($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE Name LIKE '%$name%'"; 
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function addInstructor($data){
	$conn = db_conn();
    $selectQuery = "INSERT into instructor (Username, Password, Name, Email, ContactNo)
VALUES (:username, :password, :name, :email, :contactno)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':contactno' => $data['contactno']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function login($Data)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `instructor` where username = :username AND password= :password ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(
		array(
		':username'=> $_POST["username"],
		':password'=> $_POST["password"],
		)
		
		
		);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    

   $conn = null;
    return true;
}


function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `instructor` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updateProfile($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `instructor` set  name = ?, email = ?, contactno=?  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['name'], $data['email'],$data['contactno'],$username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}
function updatePass($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `instructor` set  password = ?,  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['password'], $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}



 
 ?>






