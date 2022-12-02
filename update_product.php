<?php

	include 'connection..php';

	if(isset($_POST['id']))
	{
		$id = $_POST['id'];

		$query = "SELECT * FROM tbl_food WHERE id = '$id'";
		$result = mysqli_query($db, $query);
		$data = mysqli_fetch_assoc($result);
		echo json_encode($data);
	}

?>