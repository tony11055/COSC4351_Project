<?php

	include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Restaurant - profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div class="wrapper">

		<!-- Sidebar -->

		<div class="nav-side-menu">
			<div class="brand">User</div>
			<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
			<div class="menu-list">
				<ul id="menu-content" class="menu-content collapse out">
					<li>
						<a href="dashboard.php">
	                  		<i class="fas fa-tachometer-alt"></i> Dashboard
	                  	</a>
					</li>

	                
	                </li>

	                <li>
	                  	<a href="table.php">
	                  		<i class="fa fa-table fa-lg"></i> Table
	               		</a>
	                </li>

	                <li>
	                  	<a href="category.php">
	                  		<i class="fas fa-cash-register"></i> Category
	               		</a>
	                </li>

	                <li data-toggle="collapse" data-target="#products" class="collapsed">
	                	<a href="#"><i class="fas fa-cookie"></i> Products <i class="fas fa-caret-down"></i></a>
	                </li>

	                <li data-toggle="collapse" data-target="#order" class="collapsed">
	                	<a href="#"><i class="fas fa-book-open"></i> Orders <i class="fas fa-caret-down"></i></a>
	                </li>
	                <ul class="sub-menu collapse" id="order">
	                  <li><a href="order.php">Manage Orders</a></li>
	                </ul>

	                <li>
	                  	<a href="info.php">
	                  		<i class="fa fa-info fa-lg"></i> Company Info
	               		</a>
	                </li>

	                <li class="active">
	                  	<a href="profile.php">
	                  		<i class="fa fa-users fa-lg"></i> Profile
	               		</a>
	                </li>

	                

	                <li>
	                  	<a href="logout.php">
	                  		<i class="fa fa-user-times fa-lg"></i> Logout
	               		</a>
	                </li>

				</ul>	
			</div>
		</div>

		<!-- Content -->

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav>
							<a href="#" id="toggle"><i class="fas fa-bars ml-3"></i></a>
						</nav>
						<div class="below-toggle-content">
							<div class="col-md-12">
								<div class="top-part mb-3">
									<h2 class="d-inline">User</h2>
									<p class="d-inline ml-2">Profile</p>
									<a href="dashboard.php" class="d-inline text-dark mt-2" style="text-decoration: none; float: right; font-weight: 500;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
								</div>
								<div class="row" id="user_info">
									<form method="POST" action="" class="w-100 p-3" id="update_form">
										<div class="form-group">
									    	<label for="userid" style="font-weight: 600;">Id</label>
									    	<input type="text" name="userid" class="form-control shadow-none" id="userid"  value="" disabled="true">
									  	</div>
									  	<div class="form-group">
									    	<label for="first" style="font-weight: 600;">First Name</label>
									    	<input type="text" name="first" class="form-control shadow-none" id="first" placeholder="Enter First Name" value="">
									  	</div>
									  	<div class="form-group">
									    	<label for="last" style="font-weight: 600;">Last Name</label>
									    	<input type="text" name="last" class="form-control shadow-none" id="last" placeholder="Enter Last Name" value="">
									  	</div>
									  	<div class="form-group">
									    	<label for="phone_number" style="font-weight: 600;">Phone Number</label>
									    	<input type="Number" name="phone_number" class="form-control shadow-none" id="phone_number" placeholder="Enter Phone Number" value="">
									  	</div>
									  	<div class="form-group">
									    	<label for="email" style="font-weight: 600;">Email</label>
									    	<input type="email" name="email" class="form-control shadow-none" id="email" placeholder="Enter Email" value="">
									  	</div>
										<button type="submit" name="update" class="btn btn-primary" id="update">Update Details</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>	

	<script type="text/javascript">
		$('#toggle').click(function(e){
			e.preventDefault();
			$('.wrapper').toggleClass('menuDisplayed');
		});
	</script>

	<script type="text/javascript">
		/* Getting Data as json */

		$(document).ready(function(){
			$.ajax({
				url:"get_user_data.php",
				method:"POST",
				dataType:"json",
				success:function(data){
					$('#first').val(data.first);
					$('#last').val(data.last);
					$('#email').val(data.email);
					$('#phone_number').val(data.phone_number);
					$('#userid').val(data.userid);
				}
			});
		});

		/* Updating Data at backend */

		$('#update_form').on('submit', function(e){
			var userid = $('#userid').val();
			var first = $('#first').val();
			var last = $('#last').val();
			var phone_number = $('#phone_number').val();
			var email = $('#email').val();
			e.preventDefault();
			if($('#first').val() == "")
			{
				alert('First Name is required.');
			}
			else if($('#last').val() == "")
			{
				alert('Last Name is required.');
			}
			else if($('#phone_numberh').val() == "")
			{
				alert('Phone Number is required.');
			}
			else if($('#email').val() == "")
			{
				alert('Email is required.');
			}
			else
			{
				$.ajax({
					url:"update_user_database.php",
					method:"POST",
					data: {
						first: first,
						last: last,
						phone_number: phone_number,
						email: email,
						userid: userid
					},
					success:function(data)
					{
						$('#user_info').html(data);
						   setTimeout(function(){
						       location.reload();
						   },1500);
					}
				});
			}
		});


	</script>

</body>
</html>