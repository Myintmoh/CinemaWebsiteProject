<?php 
    include "connectionpdo.php";
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
</head>
<body>
<?php include 'header.php'; ?>
<div class="container" style="margin-top: -2px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-left: -167px; width: 1263px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/JCGVOpenNowImage.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/JCGVProhibitedItemsImage.jpg" alt="Chicago" style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- now showing -->


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

  <!-- promotions -->


  
</body>
<?php include 'footer.php';?>
</html>