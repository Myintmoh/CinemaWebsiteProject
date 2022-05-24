<?php 
    include "admin/connectionpdo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JCGV Cinema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
    body{
      overflow-x: hidden;
    }
  </style>
</head>
<body>
<?php include 'header.php'; ?>
<div style="margin-top: 150px;"></div>
<!-- now showing -->
<div class="row" style="margin-top: -50px;">
  <?php include 'admin/connectionpdo.php';?>
        <center>
          <div class="heading_container heading_center">
            <h2>NOW PLAYING</h2> <br>
          </div>
        </center>
          <?php 
          $sql=$db->prepare("SELECT * FROM movie_tbl WHERE status='showing'");
          $sql->execute();
          while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            ?>
            <div class="col-sm-4" align="center">

              <form method="post" action="viewdetails.php">
              <img src="admin/images/<?php echo $poster; ?>" width="200" height="300" style="border-radius: 50px; border: 2px solid black;"><br>
              <h4><?php echo $title; ?></h4>
              <a href="<?php echo $trailer_link; ?>" target="_blank" class="btn btn-info">Watch Trailer</a>
              <input type="hidden" name="name" value="<?php echo $title;?>">
              <button class="btn btn-info" name="submit">View Details</button>
              <br><br> <br>
            </form>
            </div>
          <?php } ?>
        </div>


<section class="why_section bg-1">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          How It Works
        </h2>
        <h4>
          3 Simple steps to book your favorite movie!
        </h4>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <div class="service-item-icon">
                    <i class="fas fa-4x fa-user"></i>
                </div>
            </div>
            <div class="detail-box">
              <h4>
                1. Register for an account
              </h4>
              <p>
                login or register for an account to make bookings
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
            </div>
            <div class="detail-box">
              <h4>
                2. Choose your favorite movie
              </h4>
              <p>
                choose the movie you want to watch at our cinema
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
            </div>
            <div class="detail-box">
              <h4>
                3. Book & Enjoy the movie
              </h4>
              <p>
                book the seats and make payments and enjoy the movie
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- comming soon -->
  <div class="row" style="margin-top: 20px;">
  <?php include 'admin/connectionpdo.php';?>
        <center>
          <div class="heading_container heading_center">
            <h2>COMMING SOON</h2> <br>
          </div>
        </center>
          <?php 
          $sql=$db->prepare("SELECT * FROM movie_tbl WHERE status='upcoming'");
          $sql->execute();
          while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            ?>

<div class="col-sm-3" align="center">

<form method="post" action="viewdetails2.php">
<img src="admin/images/<?php echo $poster; ?>" width="200" height="300" style="border-radius: 50px; border: 2px solid black;"><br>
<h4><?php echo $title; ?></h4>
<a href="<?php echo $trailer_link; ?>" target="_blank" class="btn btn-info">Watch Trailer</a>
<input type="hidden" name="name" value="<?php echo $title;?>">
<button class="btn btn-info" name="submit">View Details</button>
<br><br> <br>
</form>
</div>
          <?php } ?>
        </div>

  <!-- promotions -->


  <div style="margin-top: -300px;"></div>
</body>
<?php include 'footer.php';?>
</html>