<?php
    session_start();
    include 'admin/connectionmysqli.php';
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      overflow-x: hidden;
    }

    .topnav {
      overflow: hidden;
      /* background-color: #0AA1DD; */
      background-color: white;
      top:0;
      position:fixed;
      z-index: 999;
      width: 100%;
      border-bottom: 5px solid black;
    }

    .topnav a {
      float: left;
      /* color: white; */
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .link {
      margin-top: 11px;
    }

    .link:hover {
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
  <a href="homepage.php"><img src="admin/images/jcgv.png" alt="JCGV" width="150px" height="50px" style="margin-top: -5px;"></a>
  <a href="homepage.php" class="link">HOME</a>
  <!-- <a href="showing.php" class="link">SHOWING</a>
  <a href="upcoming.php" class="link">UPCOMING</a> -->
  <a href="movies.php" class="link">MOVIES</a>
  <a href="contact.php" class="link">CONTACT</a>
  <a href="about.php" class="link">ABOUT</a>

  <?php 
    if(isset($_SESSION['user'])) {
        $us=mysqli_query($con, "select * from user_tbl where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?>
        <div style="float: right;">
            <a href="profile.php" class="link"><i class="fa fa-user"></i> <?php echo $user['name'];?></a>
            <a href="logout.php" class="link"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
        <?php }
            else{
                ?>
                <div style="float: right;">
                <a href="login.php" class="link"><i class="fa fa-user"></i> Login</a>
                <a href="register.php" class="link"><i class="fa fa-user-plus"></i> Register</a>
                </div>
                <?php
            }
        ?>
        <div class="block" style="margin-top: 20px;">
	        <div class="wrap">		
            <form action="searchprocess.php" method="post" onsubmit="myFunction()">
		          <fieldset>
		       	    <div class="field" >
                  <!-- <input type="text" placeholder="Enter A Movie Name" style="height:32px;width:300px; margin-left: 50px; border-radius: 0px;"  required id="search111" name="search">
                  <input type="submit" value="Search" style="height:32px; margin-left: -4px; margin-bottom: 2px; border-radius: 0px;" class="btn btn-info"> -->
                  <input type="text" placeholder="Enter A Movie Name" style="height:31px;width:300px; margin-left: 30px;" name="search">
                  <input type="submit" value="Search" style="height:32px; margin-left: -5px;">
                </div>       	
		          </fieldset>
            </form>
            <div class="clear"></div>
          </div>
        </div>
<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }

  }
    </script>
</div>
</body>
</html>