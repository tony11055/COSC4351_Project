<?php

	include 'connection.php';
	
	if(isset($_GET['cat_id']))
	{
		$cat_id = $_GET['cat_id'];
		$query = "DELETE FROM tbl_category WHERE cat_id = '" . $cat_id . "'";
		mysqli_query($db, $query);
		header('Location: category.php');		
	}	
?>