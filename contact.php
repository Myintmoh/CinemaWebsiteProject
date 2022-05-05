<?php
    include 'header.php';
    include 'admin/connectionpdo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>JCGV Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
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
</head>
<body>
    <section class="contact_section " style="margin-bottom: -250px; margin-top: 50px;">
        <div class="container px-0">
            <div class="heading_container ">
                <h2 class="">
                    <center> Contact Us</center>
                </h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-7 col-md-6 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.948639104222!2d96.15169691453904!3d16.779230724476193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec821e1a39ad%3A0x376d9bfb7012e85!2sJCGV%20Junction%20City!5e0!3m2!1sen!2smm!4v1651639880190!5m2!1sen!2smm" width="930" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 px-0">
                    <form method="post" action="commentprocess.php">
                        <div style="margin-bottom: -75px; width: 451px;"><input type="text" placeholder="Name" name="name"/></div>
                        <div style="margin-left: 450px;"><input type="email" placeholder="Email" name="email" /></div>
                        <div><input type="text" placeholder="Phone" name="phone" /></div>
                        <div><input type="text" class="message-box" placeholder="Message" name="comment" /></div>
                        <div class="d-flex " style="margin-bottom: -80px;">
                            <button name="send">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
</html>
