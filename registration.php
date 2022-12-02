<?php
  include "connection.php";
  include "navbar.php";
  include "style.php";

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="reg.css">

  <title>User Registration</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
 .middle{
  float: right;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
.btn{
  background: none;
  border: 1px solid #000;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  padding: 1px 2px;
  min-width: 200px;
  margin: 1px;
  cursor: pointer;
  transition: color 0.4s linear;
  position: relative;
  background-color: #34495e;
  border-radius: 30px;
}
.btn:hover{
  color: #fff;
}
.btn::before{
 content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #0000;
  z-index: -1;
  transition: transform 0.5s;
  transform-origin: 0 0;
  transition-timing-function: cubic-bezier(0.5,1.6,0.4,0.7);
}
.btn1::before{
  transform: scaleX(0);
}
  </style>
 
</head>
<body>

<section>
  <div class="container">
<br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px; color: white; font-family: Lucida Console;">JAB's</h1>
        <h1 style="text-align: center; color: white; font-size: 25px;">User Sign Up Form</h1><br>

      <form name="Registration" action="" method="post">
        
        <div class="label-float">

          <input class="form-control" style="color:White;" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" style="color:White;" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" style="color:White;" type="text" name="user_name" placeholder="Username" required=""> <br>
          <input class="form-control" style="color:White;" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" style="color:White;" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" style="color:White;" type="text" name="phone_number" placeholder="Phone No" required=""><br>
          <input class="form-control" style="color:White;" type="text" name="mailing_address" placeholder="Mailing Address" required=""><br>
          <input class="form-control" style="color:White;" type="text" name="billing_address" placeholder="Billing Address" required=""><br>

          <select class="form-holder" style="color: #F5F5F5;width: 100%;padding: 5px 5px;display: inline-block;border: 0;border-bottom: 2px solid #cdaa7c;background-color: transparent;outline: none;min-width: 180px;font-size: 16px;transition: all .3s ease-out;border-radius: 0;" type="text" name="preferred_diner" placeholder="Select Payment Method:" required="">
            <option value="">Select Your Preferred Diner Location:</option>
            <option value="154284661">5280 West Rd</option>
            <option value="9984667">2245 Hudson Ave</option>
            <option value="46595648">54 Kings St</option>
          </select><br>

          <select class="form-control" style="color: #F5F5F5;width: 100%;padding: 5px 5px;display: inline-block;border: 0;border-bottom: 2px solid #cdaa7c;background-color: transparent;outline: none;min-width: 180px;font-size: 16px;transition: all .3s ease-out;border-radius: 0;" type="text" name="preferred_payment" placeholder="Select Payment Method:" required="">
            <option value="">Select Your Preferred Payment Method:</option>
            <option value="cash">Cash</option>
            <option value="credit">Credit</option>
            <option value="check">Check</option>
          </select><br>

          
            <div class="middle"><br><br>
          <button class="btn btn1" type="submit" name="submit" value="Sign Up"> signup </button>
                    </div>

      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT user_name from `user_reg`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['user_name']==$_POST['user_name'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `user_reg` VALUES('','$_POST[first]', '$_POST[last]', '$_POST[user_name]', '$_POST[password]', '$_POST[email]', '$_POST[phone_number]', '$_POST[mailing_address]', '$_POST[billing_address]', '$_POST[preferred_diner]', '', '$_POST[preferred_payment]');");

          //Login Cache
          setcookie("username",$_POST['user_name'],time() + 60*60*24*30);
          setcookie("password",$_POST['password'],time() + 60*60*24*30);

        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>

          <script type="text/javascript">
            window.location="index.php"
            //window.location="profile.php"
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>


