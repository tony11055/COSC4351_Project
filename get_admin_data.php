<?php

	include 'connection.php';

	$query = "SELECT * FROM tbl_admin";
	$result = mysqli_query($db, $query);
	$data = mysqli_fetch_assoc($result);
	echo json_encode($data);

?>