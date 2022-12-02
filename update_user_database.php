<?php

	include 'connection.php';

	$message = "";

	if(isset($_POST['firstUpdate']) && isset($_POST['lastUpdate']) && isset($_POST['usernameUpdate']) && isset($_POST['emailUpdate'])  && isset($_POST['userid']))
	{
		$output = "";
		$firstUpdate = mysqli_real_escape_string($db, $_POST['firstUpdate']);
		$lastUpdate = mysqli_real_escape_string($db, $_POST['lastUpdate']);
		$usernameUpdate = mysqli_real_escape_string($db, $_POST['usernameUpdate']);
		$emailUpdate = mysqli_real_escape_string($db, $_POST['emailUpdate']);
		$userid = $_POST['userid'];

		$query = "UPDATE user_reg SET first = '$firstUpdate', last = '$lastUpdate', user_name = '$usernameUpdate', email = '$emailUpdate' WHERE userid = '" . $userid . "'";
		$message = "Data Updated Successfully!!!";

		if(mysqli_query($db, $query))
		{
			//$output .= "<p class='bg-success text-white w-100 pt-2 pb-2 pl-3 pr-3 mb-3' style='border-radius: 5px;'>Store Added Successfully...</p>";
			$output .= "
				<div class='alert alert-success alert-dismissible fade show w-100' role='alert'>
					<strong>" . $message . "</strong>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    	<span aria-hidden='true'>&times;</span>
				  	</button>
				</div>
			";
			$select_query = "SELECT * FROM user_reg ORDER BY userid DESC";
			$result = mysqli_query($db, $select_query);
			$output .= '
				<table class="table table-hover mx-3" id="user_table">
					<thead class="thead-dark">
				    	<tr>
				      		<th scope="col">Id</th>
				      		<th scope="col">First Name</th>
				      		<th scope="col">Last Name</th>
				      		<th scope="col">Username</th>
				      		<th scope="col">Email</th>
				      		<th scope="col">phone_number</th>
				      		<th scope="col">Action</th>
				    	</tr>
				  	</thead>
			';


			while($data = mysqli_fetch_array($result))
			{	
				$output .= "
				    	<tbody>
					    	<tr>
					      		<td> " . $data['userid'] . "</td>
					      		<td> " . $data['first'] . "</td>
					      		<td> " . $data['last'] . "</td>
					      		<td> " . $data['user_name'] . "</td>
					      		<td>" . $data['email'] . "</td>
					      		<td>" . $data['phone_number'] . "</td>
					      		
					      		<td>
					      			<div class='row'>
					      				<button type='submit' name='edit' userid=" . $data['userid'] . " class='btn btn-sm btn-primary mr-2 edit_data'>Edit</button>
					      				<a href='delete_user.php?userid=" . $data['userid'] . "' class='btn btn-sm btn-danger'>Delete</a>
					      			</div>
					      		</td>
					    	</tr>
					    </tbody>
	    			";
		    }

		    $output .= "</table>";
		}
		else
		{
			$msg = "Error in Query";
			$output .= "
				<div class='alert alert-success alert-dismissible fade show w-100' role='alert'>
					<strong>" . $msg . "</strong>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    	<span aria-hidden='true'>&times;</span>
				  	</button>
				</div>
			";
		}
		echo $output;

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.active-status{
		  background-color: #28a745 !important;
		  font-size: 14px;
		  color: white;
		  padding: 1.5px 5px;
		  border-radius: 2px;
		}

		.inactive-status{
		  background-color: #dc3545 !important;
		  font-size: 14px;
		  color: white;
		  padding: 1.5px 5px;
		  border-radius: 2px;
		}
	</style>
</head>
<body>

</body>
</html>