<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.topnav a.active {
  background-color: #0AA1DD;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="homepage.php">HOME</a>
  <a href="#news">SHOWING</a>
  <a href="#contact">UPCOMING</a>
  <a href="#about">CONTACT</a>
  <a href="#about">ABOUT</a>

  <!-- <?php 
    if(isset($_SESSION['user'])) {
        $us=mysqli_query($con, "select * from user_tbl where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?>
        <div style="float: right;">
            <a href="profile.php"><?php echo $user['name'];?></a>
            <a href="logout.php">Logout</a>
        </div>
        <?php }
            else{
                ?>
                <div style="float: right;">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
                </div>
                <?php
            }
        ?> -->
</div>
</body>
</html>
