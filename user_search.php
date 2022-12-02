<?php

	include 'connection.php';

	$search = $_GET['search'];

	$result = mysqli_query($db, "SELECT * FROM user_reg WHERE first like ('%$search%') OR last like ('%$search%') OR user_name like ('%$search%') OR userid like ('%$search%') OR email like ('%$search%' OR phone_number like ('%$search%')) ORDER BY userid DESC ");
  	$query_results = mysqli_num_rows($result);

?>

<!DOCTYPE html>
  	<html>
  	<head>
  		<title>
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
  		</title>
  	</head>
  	<body> 	

	  	<table class='table table-striped'>
	    <tbody>
		    
		    <tr>
	  			<?php 
		  			if($query_results > 0)
		  			{
		  				while($data = mysqli_fetch_assoc($result))
		  				{	
	  			?>			
				      		<td><?php echo $data['userid'] ?></td>	
				      		<td><?php echo $data['first'] ?></td>	
				      		<td><?php echo $data['last'] ?></td>
				      		<td><?php echo $data['user_name'] ?></td>
				      		<td><?php echo $data['email'] ?></td>
				      		<td><?php echo $data['phone_number'] ?></td>
				      		<td>
				      			<div class="row">
				      				<button type="submit" name="edit" id="<?php echo $data['userid']; ?>" class="btn btn-sm btn-primary mr-2 edit_data">Edit</button>
				      				<a href="delete_user.php?userid=<?php echo $data['userid']; ?>" class="btn btn-sm btn-danger">Delete</a>
				      			</div>
				      		</td>
	    	</tr>      		
				<?php
						}
					}
					else
					{
						echo "<h5 class='text-danger mt-3 mb-3'>No data to display.<h5>";
					}	
				?>       		
	    	    	
		</tbody>
		</table>
	</body>
</html>   		
