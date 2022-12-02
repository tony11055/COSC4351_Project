<?php

	include 'connection.php';

	$query = "SELECT * FROM user_reg";
	$result = mysqli_query($db, $query);
	$data = mysqli_fetch_assoc($result);
	echo json_encode($data);

?>