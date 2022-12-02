<?php

	include 'connection.php';
	
	if(isset($_GET['id']))
	{
		$product_id = $_GET['id'];
		$query = "DELETE FROM tbl_food WHERE id = '" . $product_id . "'";
		mysqli_query($db, $query);
		header('Location: manage_product.php');		
	}	
?>