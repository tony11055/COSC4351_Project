<?php
	//Check to see if the user is logged in
  include "connection.php";

  if(isset($_COOKIE["username"])){
    $user = $_COOKIE["username"];
  }
  else{
  	$user = NULL;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Restaurant website template with html and css</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- custom css file link -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

</head>
<body>
	<!-- header section start -->
	<header>
		<a href="#" class="logo"><img src="logo.png"></a>

		<nav class="navbar">
			<a href="#home" class="active">Home</a>
			<!-- If the user is logged in, don't show login and register tabs -->
			<?php if (!$user): ?>
			<a href="registration.php">Register</a>
			<a href="login.php">Login</a>
			<?php endif; ?>
			<a href="#about">about</a>
			<a href="admin_login.php">Admin</a>
			<a href="#menu">Menu</a>
			<a href="#team">Team</a>
			<a href="#reservation">Reservation</a>
			<a href="#blog">Blog</a>
			<!-- LOGOUT BUTTON -->
			<!-- If the user is logged in, show logout tab -->
			<?php if ($user): ?>
				<a href="loggingOut.php">Logout</a>
			<?php endif; ?>
		</nav>

		<div class="icons">
			<i class="fas fa-bars" id="menu"></i>
			<i class="fas fa-search" style="color: #243c64" ></i>
			<i class="fas fa-heart" style="color: #243c64"></i>
			<i class="fas fa-shopping-cart" style="color: #243c64"></i>
		</div>
	</header>
	<!-- header section end -->

	<!-- slider section start -->
	<div class="home" id="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper wrapper">
				<div class="swiper-slide slide slide1">
					<div class="content">
						<img src="logo1.png">

						<h3>JAB's</h3>
						<h1>gift voucher</h1>
						<p>
							give away your beloved customers
						</p>
						<a href="#" class="btn">order now</a>
					</div>
				</div>

				<div class="swiper-slide slide slide2">
					<div class="content">
						<img src="logo1.png">

						<h3>Sale of 15% for Indian food</h3>
						<h1>The fresh</h1>
						<p>
							food restaurant
						</p>
						<a href="#" class="btn">order now</a>
					</div>
				</div>

				<div class="swiper-slide slide slide3">
					<div class="content">
						<img src="logo1.png">

						<h3>we are open</h3>
						<h1>fresh fruits</h1>
						<p>
							you will love it
						</p>
						<a href="#" class="btn">order now</a>
					</div>
				</div>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
	<!-- slider section ends -->

	<!-- welcome section start -->
	<section class="welcome" id="about">
		<h1 class="heading">WELCOME TO JAB's</h1>
		<center><h3 class="sub-heading"> Pure Satisfaction </h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="cakef.jpg">
				</div>

				<div class="content">
					<h3>PROFESSIONAL LEVEL</h3>
					<p>We are honest professionals who understand the importance of knowing our business, exceeding expectations and avoiding politics along the way...</p>

					<a href="#" class="btn">Read More</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="sushi.jpg">
				</div>

				<div class="content">
					<h3>FRESH FOOD GUARANTEED</h3>
					<p>We do our best to source our produce and meats from local farms and small businesses.We've embarked on a journey to make healthy, affordable good food available..</p>

					<a href="#" class="btn">Read More</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="allfood.jpg">
				</div>

				<div class="content">
					<h3>THE MENU IS PLENTIFUL</h3>
					<p>We have a 5 page menu, a budget menu and a fast menu. So yes we have something for everyone ;-)...</p>

					<a href="#" class="btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- welcome section start -->

	<!-- our menu section start -->
	<section class="our-menu" id="menu">
		<h1 class="heading">our food menu</h1>
		<center><h3 class="sub-heading"> see what we offer </h3></center>

		<div class="menu-container">

			<div class="item">
				<div class="item-name">
					<h2>Main Course</h2>
					<img src="drinks.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$40</h3>

						<ul>
							<li><a href="#">Chicken</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$26</h3>

						<ul>
							<li><a href="#">Mushrooms</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="item">
				<div class="item-name">
					<h2>Soups & salads</h2>
					<img src="drinks.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$40</h3>

						<ul>
							<li><a href="#">Chicken</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$26</h3>

						<ul>
							<li><a href="#">Mushrooms</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

				</div>
			</div>


			<div class="item">
				<div class="item-name">
					<h2>Drinks</h2>
					<img src="drinks.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$40</h3>

						<ul>
							<li><a href="#">Chicken</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$26</h3>

						<ul>
							<li><a href="#">Mushrooms</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

				</div>
			</div>


			<div class="item">
				<div class="item-name">
					<h2>Desserts</h2>
					<img src="drinks.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$40</h3>

						<ul>
							<li><a href="#">Chicken</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Super-Delicious Zuppa Toscana</h3>
						<span class="dots"></span>
						<h3>$26</h3>

						<ul>
							<li><a href="#">Mushrooms</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">Sausage</a></li>
							<li><a href="#">Spinach</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- our menu section ends -->

	<!-- our team section start -->
	<section class="our-team" id="team">
		<h1 class="heading">our talented chef</h1>
		<center>
			<h3 class="sub-heading"> Experience Enthusiasm </h3>
		</center>

		<div class="our-chef">
			<div class="item">
				<div class="image">
					<img src="chef3.png">
				</div>

				<div class="chef-info">
					<div>
						<h3>Amya Henry</h3>
						<span>Patissier</span>

						<ul>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image">
					<img src="chef1.jpg">
				</div>

				<div class="chef-info">
					<div>
						<h3>Carlos Roberto</h3>
						<span>Chef de Cuisine</span>

						<ul>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image">
					<img src="chef2.jpg">
				</div>

				<div class="chef-info">
					<div>
						<h3>Daniel Colbart</h3>
						<span>Entremetier</span>

						<ul>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>


		</div>
	</section>
	<!-- our team section ends -->







	<!-- reservation section start -->
		<div class="reservation" id="reservation">
			<div class="image">
				
			</div>

			<div class="form">
				<h1 class="heading">book a table</h1>
				<center><h3 class="sub-heading">~ check out our place ~ </h3></center>
				<!-- If the user isn't logged in, notify them to -->
				<?php if (!$user): ?>
				<center><a href="login.php" style="text-align: center; font-size: 20px; color: white;"> You aren't currently logged in. <span style="text-decoration: underline;">Click here to Login</span>.</a></center>
				<center><a href="registration.php" style="text-align: center; font-size: 10px; color: #cdaa7c;"> or if you haven't created an account yet, <span style="text-decoration: underline;">click here to Register</span>.</a></center>
				<?php endif; ?>
				<form name="Reserve" action="" method="post">
					<div class="form-holder">
						<!-- If the user is logged in, auto fill info -->
						<?php if ($user): ?>
							<?php
								$userInfo="SELECT * FROM `user_reg` WHERE user_name = '$user'";
								$res=mysqli_query($db,$userInfo);
        				$row=mysqli_fetch_assoc($res)
							?>
							<div>
								<input type="text" name="guests" placeholder="# of Guests" required="">
								<input type="time" name="b_time" placeholder="Time" min="09:00" max="20:00" required>
								<input type="text" name="phone_num" required="" value="<?php echo $row['phone_number'] ?>">
							</div>

							<div>
								<input type="date" name="b_date" placeholder="Date" required="">
								<input type="text" name="name" required="" value="<?php echo $row['first'] ?>">
								<input type="email" name="email" required="" value="<?php echo $row['email'] ?>">
							</div>
						<!-- Otherwise, don't auto fill info -->
						<?php else : ?>
							<div>
								<input type="text" name="guests" placeholder="# of Guests" required="">
								<input type="time" name="b_time" placeholder="Time" min="09:00" max="20:00" required>
								<input type="text" name="phone_num" placeholder="Phone" required="">
							</div>

							<div>
								<input type="date" name="b_date" placeholder="Date" required="">
								<input type="text" name="name" placeholder="Name" required="">
								<input type="email" name="email" placeholder="Email" required="">
							</div>
						<?php endif; ?>
							<div>
								<input type="number" name="credit_card" placeholder="Credit Card">
							</div>
					</div>
					<button class="btn" type="submit" name="submit" value="submit">Book now</button>
					<!--<center><a href="#" class="btn">Book now</a></center>-->
				</form>

			</div>
		</div>
	<!-- reservation section ends -->










	<!-- news section start -->
	<section class="blog welcome" id="blog">
		<h1 class="heading">latest news</h1>
		<center><h3 class="sub-heading"> ~ Greate articles ~ </h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="post-thumb-4.jpg">
				</div>

				<div class="content">
					<h3>PROFESSIONAL LEVEL</h3>
					<p>We are honest professionals who understand the importance of knowing our business, exceeding expectations and avoiding politics along the way...</p>
					<a href="#">READ MORE</a>
					<img src="post-body-bg-1.png">
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="post-thumb-5.jpg">
				</div>

				<div class="content">
					<h3>FRESH FOOD GUARANTEED</h3>
					<p>We do our best to source our produce and meats from local farms and small businesses.We've embarked on a journey to make healthy, affordable good food available..</p>
					<a href="#">READ MORE</a>
					<img src="post-body-bg-2.png">
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="post-thumb-6.jpg">
				</div>

				<div class="content">
					<h3>THE MENU IS PLENTIFUL</h3>
					<p>We have a 5 page menu, a budget menu and a fast menu. So yes we have something for everyone ;-)...</p>
					<a href="#">READ MORE</a>
					<img src="post-body-bg-3.png">
				</div>
			</div>

		</div>
	</section>
	<!-- news section ends -->
	

	<!-- footer section start -->
	<section class="footer">
		<img src="logo.png" class="logo">

		<div class="container">
			<div>
				<h3>ABOUT US</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
			</div>

			<div>
				<h3>GET NEWS & OFFERS</h3>
				<input type="email" name="" placeholder="enter your email">
				<ul>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
			</div>

			<div>
				<h3>CONTACT US</h3>
				<span>JAB's Restaurant</span>
				<span>+ (1) 832772101</span>
				<span>jabsrestaurant@gmail.com</span>
				<span>www.jabsrestaurant.com</span>
			</div>
		</div>

		<p>&copy;2022 Reserved by JAB's Restaurant</p>
	</section>
	<!-- footer section end -->

	<!-- jump to top -->

	<a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>











	<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop:true,
      });
    </script>
	<script type="text/javascript">
		let menu = document.querySelector('#menu');
		let navbar = document.querySelector('.navbar');

		menu.onclick = () =>{
			menu.classList.toggle('fa-times');
			navbar.classList.toggle('active');
		}
	</script>



	<!-- Table Reservation Backend -->
	<?php
      if(isset($_POST['submit']))
      {
        $ava=0;			//availability var
        $capa=0;		//capacity var
        $cc=0;			//credit card var
        $ht=0;			//high traffic var
        $cap=0;			//total restraunt capacity
        $n_cap=0;		//capacity of reserverd tables
        $t_cap=0;		//capacity of non-reserved tables
        //Checks the tables reserved during the proposed time+date
				$sql="SELECT table_num FROM reservations WHERE book_time > SUBTIME('$_POST[b_time]', '00:59:00') AND book_time < ADDTIME('$_POST[b_time]', '00:59:00') AND book_date = '$_POST[b_date]'";
        $res=mysqli_query($db,$sql);
				$count=mysqli_num_rows($res);
        
      	//Check Table Avalibility (All 10 tables are in the select statement)
        if($count>=10)
        {
        	//Tell customer no tables avalible
          $ava+=1;
        }
        else{
        	//Find total table capacity
        	$cap_query="SELECT * FROM `book_table`";
        	$res=mysqli_query($db,$cap_query);
        	if($res)
        	{
        		while($cap_row = mysqli_fetch_row($res))
        		{
        			$cap+=$cap_row[1];
        		}
        	}

        	//Find capacity of used tables and subtract from total
        	$joined_cap="SELECT book_table.table_num, book_table.capacity FROM book_table INNER JOIN reservations ON book_table.table_num=reservations.table_num WHERE reservations.book_time > SUBTIME('$_POST[b_time]', '00:59:00') AND reservations.book_time < ADDTIME('$_POST[b_time]', '00:59:00') AND reservations.book_date = '$_POST[b_date]'";
        	$res=mysqli_query($db,$joined_cap);
        	if($res)
        	{
        		while($joined_cap_row = mysqli_fetch_row($res))
        		{
        			$n_cap+=$joined_cap_row[1];
        		}
        	}
        	$t_cap=$cap-$n_cap;

        	//Check If Capacity Can Accomadate For Guest Number
        	if($t_cap < "$_POST[guests]")
        	{
        		//Tell customer we don't have the capacity
        		$capa+=1;
        	}
        	else
        	{
        		//Check day of the week of customer date
        		$dayofweek = date('l', strtotime("$_POST[b_date]"));
        		$day = strtotime("'$_POST[b_date]'");
        		print_r(" $_POST[b_date] Day of Week: $dayofweek\n");


        		//Check if it is a High Traffic Day (Weekends, 4th of July-2023, Christmas-2023, Valentines Day-2023)
        		if($dayofweek == "Saturday" || $dayofweek == "Sunday" || "$_POST[b_date]" == "2023-07-04" || "$_POST[b_date]" == "2022-12-25" || "$_POST[b_date]" == "2023-02-14")
        		{
        			$ht+=1;
        			//Check if they have given their creditcard info
        			if(!"$_POST[credit_card]" || (strlen("$_POST[credit_card]") != 10))
        			{
        				//Tell customer to add valid card info to reservation
        				$cc+=1;
        			}
        		}
        	}
        }
        //If No Tables are Avalible
        if($ava==1)
        {
					?>
          <script type="text/javascript">
            alert("We have no avalible tables at that time. Sorry.");
          </script>
          <?php
        }
        //If There is Not Enough Capacity for Guests
        elseif($capa==1)
        {
          ?>
          <script type="text/javascript">
            alert("We do not have the capacity to support your guest size at that time. Sorry.");
          </script>
          <?php
        }
        //If it is a High Traffic Day and the user didnt enter a Valid Credit Card Number
        elseif($cc==1)
        {
          ?>
          <script type="text/javascript">
            alert("This is a high traffic day, please re-reserve with a valid credit card.");
          </script>
          <?php
        }
        //If All Conditions are met(Make Reservation)
        else
        {
        	$guestToSeat = "$_POST[guests]";
        	$table = 0;
        	//Reserve tables in an optimized order
        	while($guestToSeat > 0)
        	{
		      	$findTables="SELECT * FROM book_table WHERE table_num NOT IN (SELECT book_table.table_num FROM book_table INNER JOIN reservations ON book_table.table_num=reservations.table_num WHERE reservations.book_time > SUBTIME('$_POST[b_time]', '00:59:00') AND reservations.book_time < ADDTIME('$_POST[b_time]', '00:59:00') AND reservations.book_date = '$_POST[b_date]') AND capacity >= $guestToSeat ORDER BY capacity ASC";
		        $res=mysqli_query($db,$findTables);
		      	$table_amt=mysqli_num_rows($res);
		      	if($table_amt==0)
		      	{
		      		$findTables="SELECT * FROM book_table WHERE table_num NOT IN (SELECT book_table.table_num FROM book_table INNER JOIN reservations ON book_table.table_num=reservations.table_num WHERE reservations.book_time > SUBTIME('$_POST[b_time]', '00:59:00') AND reservations.book_time < ADDTIME('$_POST[b_time]', '00:59:00') AND reservations.book_date = '$_POST[b_date]') ORDER BY capacity DESC";
			        $res=mysqli_query($db,$findTables);
		      	}
		        if($res)
		      	{
		      		while($findTables_row = mysqli_fetch_row($res))
		      		{
		      			$table=$findTables_row[0];
		      			//Insert User info into the Database
		      			mysqli_query($db,"INSERT INTO `reservations` VALUES('','$table','$_POST[name]','$_POST[email]', '$_POST[phone_num]', '$_POST[b_date]', '$_POST[b_time]', '$_POST[guests]', '$_POST[credit_card]');");
		      			$guestToSeat -= $findTables_row[1];
		      			//print_r("Taking Table: $table\n");
		      			break;
		      		}
		      	}
		      }
		      //If its a high traffic day, remind user of no show fee
          if ($ht==1) :
        ?>
          <script type="text/javascript">
           alert("Reservation successful. No Shows will be charged with a $10 minimum fee.");
          </script>

        <?php else : ?>
          <script type="text/javascript">
           alert("Reservation successful.");
          </script>
        <?php endif;
        }
      }
    ?>




</body>
</html>