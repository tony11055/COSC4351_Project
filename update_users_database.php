<?php 

	include 'connection.php';

	$output = "";
	$message = "";

	if(isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['id']))
	{
		$full_name = mysqli_real_escape_string($db, $_POST['full_name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$id = $_POST['id'];

		$query = "UPDATE tbl_admin SET full_name = '$full_name', email = '$email' WHERE id = $id ";
		$message = "Profile Updated";

		if(mysqli_query($db, $query))
		{
			$output .= "
				<div class='alert alert-success alert-dismissible fade show w-100 mx-3' role='alert'>
					<strong>" . $message . "</strong>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    	<span aria-hidden='true'>&times;</span>
				  	</button>
				</div>
			";

			$select = "SELECT * FROM tbl_admin WHERE id = $id";
			$result = mysqli_query($db, $select);

			while($data = mysqli_fetch_assoc($result))
			{
				$output .= '
					<form method="POST" action="" class="w-100 p-3" id="update_form">
						<div class="form-group">
					    	<label for="id" style="font-weight: 600;">Id</label>
					    	<input type="text" name="id" class="form-control shadow-none" id="id"  value="' . $data["id"] . '" disabled="true">
					  	</div>
					  	<div class="form-group">
					    	<label for="full_name" style="font-weight: 600;">First Name</label>
					    	<input type="text" name="full_name" class="form-control shadow-none" id="full_name" placeholder="Enter Full Name" value="' . $data["full_name"] .'">
					  	</div>
					  	
					  	<div class="form-group">
					    	<label for="email" style="font-weight: 600;">Email</label>
					    	<input type="email" name="email" class="form-control shadow-none" id="email" placeholder="Enter Email" value="' . $data["email"] .'">
					  	</div>
						<button type="submit" name="update" class="btn btn-primary" id="update">Update Details</button>
					</form>
				';
			}
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