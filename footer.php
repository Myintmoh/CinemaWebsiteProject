<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>


<section class="info_section" style="margin-top:300px;">
    <div class="info_container" style="margin-top: -5px;">
      <div class="container">
        <div class="row" style="margin-top: -50px;">
          <div class="col-md-6 col-lg-3" style="margin-left: 50px;">
            <h6>
              ABOUT US
            </h6>
            <p align="justify">
              JCGV is one of Myanmar's leading multiplex cinema exihibitors. JCGV brand started offering services since 2009 at the capital city of Myanmar, Naypyitaw.
              Its expansion to Yangon has brought success in the entertainment industry fulfilling its goal to provide unique cinema experience.
            </p>
          </div>

          <div class="col-md-6 col-lg-3" style="margin-left: 80px;">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Yangon, Myanmar</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> Phone: +95 123456789, <br>+95 123456780</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: jcgvmm@mail.com</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3" style="margin-left: 50px;">
            <h6>
              NEED HELP
            </h6>
            <p align="justify">
              Need help with booking movies, contact: jcgvservice@gmail.com
            </p>
          </div>
        </div>
      </div>
    </div>
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="homepage.php">JCGV Cinema</a>
        </p>
      </div>
    </footer>
  </section>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>



</body>
</html>
