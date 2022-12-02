<?php
	
	include 'connection.php';

	$query = "SELECT * FROM info";
	$result = mysqli_query($db, $query);
	$data = mysqli_fetch_array($result);
	echo json_encode($data);

?>