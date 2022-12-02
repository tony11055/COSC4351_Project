<?php

	include 'connection.php';
	
	if(isset($_GET['id']))
	{
		$table_id = $_GET['id'];
		$query = "DELETE FROM book_table WHERE id = '" . $table_id . "'";
		mysqli_query($db, $query);
		header('Location: table.php');		
	}	
?>