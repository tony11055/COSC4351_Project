<?php

	include 'connection.php';

	if(isset($_POST['cat_id']))
	{
		$category_id = $_POST['cat_id'];
		$query = "SELECT * FROM tbl_category WHERE id='$cat_id'";
		$result = mysqli_query($db, $query);
		$data = mysqli_fetch_assoc($result);
		echo json_encode($data);
	}

?>