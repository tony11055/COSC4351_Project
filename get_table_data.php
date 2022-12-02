<?php
	
	include 'connection.php';

	if(isset($_POST['table_id']))
	{
		$query = "SELECT * FROM book_table WHERE id = '" . $_POST['table_id'] . "'";
		$result = mysqli_query($db, $query);
		$data = mysqli_fetch_array($result);
		echo json_encode($data);
	}

?>