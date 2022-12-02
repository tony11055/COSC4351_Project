<?php

	include 'connection.php';

	$message = "";

	if(!empty($_POST))
	{
		$output = "";
		$title_update = mysqli_real_escape_string($db, $_POST['title_update']);
		$active_update = $_POST['active_update'];
		$cat_id = $_POST['cat_id'];

		$query = "UPDATE tbl_category SET title = '$title_update', active = '$active_update' WHERE cat_id = '" . $cat_id . "'";
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
			$select_query = "SELECT * FROM tbl_category ORDER BY cat_id DESC";
			$result = mysqli_query($db, $select_query);
			$output .= "
				<table class='table table-striped' id='category_table'>
					<thead class='thead-dark'>
				    	<tr>
				      		<th scope='col'>Id</th>
				      		<th scope='col'>Category Name</th>
				      		<th scope='col'>active</th>
				      		<th scope='col'>Action</th>
				    	</tr>
				  	</thead>
			";


			while($data = mysqli_fetch_array($result))
			{	
				if($data['active'] == 'yes')
				{
		    		$output .= "
				    	<tbody
					    	<tr>
					      		<td> " . $data['cat_id'] . "</td>
					      		<td> " . $data['title'] . "</td>
					      		<td><span class='active-status'>" . $data['active'] . "</span></td>
					      		<td>
					      			<div class='row'>
					      				<button type='submit' name='edit' cat_id='" . $data['cat_id'] . "' class='btn btn-sm btn-primary mr-2 edit_data'>Edit</button>
					      				<a href='delete_category.php?cat_id=" . $data['cat_id'] . "' name='cancel' class='btn btn-sm btn-danger delete_data'>Delete</a>
					      			</div>
					      		</td>
					    	</tr>
					    </tbody>
	    			";
	    		}
	    		else
	    		{
	    			$output .= "
				    	<tbody
					    	<tr>
					      		<td> " . $data['cat_id'] . "</td>
					      		<td> " . $data['title'] . "</td>
					      		<td><span class='inactive-status'>" . $data['active'] . "</span></td>
					      		<td>
					      			<div class='row'>
					      				<button type='submit' name='edit' cat_id='" . $data['cat_id'] . "' class='btn btn-sm btn-primary mr-2 edit_data'>Edit</button>
					      				<a href='delete_category.php?cat_id=" . $data['cat_id'] . "' name='cancel' class='btn btn-sm btn-danger delete_data'>Delete</a>
					      			</div>
					      		</td>
					    	</tr>
					    </tbody>
	    			";
	    		}	
		    }

		    $output .= "</table>";
		}

		echo $output;

	}	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.active-status, .available{
		  background-color: #28a745 !important;
		  font-size: 14px;
		  color: white;
		  padding: 1.5px 5px;
		  border-radius: 2px;
		}

		.inactive-status, .unavailable{
		  background-color: #dc3545 !important;
		  font-size: 14px;
		  color: white;
		  padding: 1.5px 5px;
		  border-radius: 2px;
		}

		.unavailable{ background-color: #ffc107 !important; }
	</style>
</head>
<body>
</body>
</html>