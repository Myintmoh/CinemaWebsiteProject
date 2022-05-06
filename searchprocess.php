<?php 
    include 'header.php';
    include 'admin/connectionpdo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>JCGV Search Results</title>
</head>
<body>
    <div class="row" style="margin-top: 100px;">
        <div class="heading_container heading_center">
            <h2>SEARCH RESULT for "<?php echo $_POST['search'];?>"</h2> <br>
        </div>
        <?php 
            $search=$_POST['search'];
            $sql=$db->prepare("SELECT * FROM movie_tbl WHERE title='$search'");
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
                    <br><br> <bR>
                </form>
            </div>
        <?php } ?>
    </div>
    <div style="margin-top: -140px;"></div>
</body>
<?php include 'footer.php'; ?>
</html>