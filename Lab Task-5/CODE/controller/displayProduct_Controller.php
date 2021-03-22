<?php 

require_once ('model/model.php');

function fetchAllProducts(){
	return showAllData();

}

function fetchProduct($id){
	return showData($id);

}
