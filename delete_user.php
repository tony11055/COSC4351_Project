<?php

	include 'connection.php';
	
	if(isset($_GET['userid']))
	{
		$userid = $_GET['userid'];
		$query = "DELETE FROM user_reg WHERE userid = '" . $userid . "'";
		mysqli_query($db, $query);
		header('Location: manage_user.php');		
	}	
?>