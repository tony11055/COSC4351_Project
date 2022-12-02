<?php

	include 'connection.php';

	if(isset($_POST['userid']))
	{
		$query = "SELECT * FROM user_reg WHERE userid = '" . $_POST['userid'] . "'";
		$result = mysqli_query($db, $query);
		$data = mysqli_fetch_array($result);
		echo json_encode($data);
	}
?>