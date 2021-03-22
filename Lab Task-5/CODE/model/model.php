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



function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into Products (Name, BuyingPrice, SellingPrice, Profit, Display)
VALUES (:name, :buyingPrice, :sellingPrice, :profit, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':buyingPrice' => $data['buyingPrice'],
        	':sellingPrice' => $data['sellingPrice'],
        	':profit' => $data['profit'],
        	':display' => $data['display']
        ]);
    }catch(PDOException $e){
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
	$selectQuery = "SELECT * FROM `products` where id = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `products` set name = ?, buyingPrice = ?, sellingPrice = ?, profit=? , display = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buyingPrice'], $data['sellingPrice'],$data['profit'], $data['display'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}



 
 






