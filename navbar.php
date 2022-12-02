<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href=".css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	
   
</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active"></a>
          </div>
          <ul class="nav navbar-nav">
            <!--<li><a href=".php"></a></li>
            <li><a href=".php"></a></li>
            <li><a href=".php"></a></li>-->
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {?>
                <ul class="nav navbar-nav">
                  
                  <!--<li><a href="profile.php">PROFILE</a></li>
                
                  <li><a href=".php">
                    
                  </a></li>-->
                  
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <!--<li><a href="profile.php">-->
                    <div style="color: white">

                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";

                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
                  
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span></a></li>
              </ul>
                <?php
            }

          ?>

      </div>
    </nav>



</body>
</html>