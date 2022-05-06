<?php 
    include 'admin/connectionpdo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="row" style="margin-top: 100px;">
        <div class="heading_container heading_center">
            <h2>SEARCH RESULT for "<?php echo $_POST['name'];?>"</h2> <br>
        </div>
        <?php 
            $name=$_POST['name'];
            $sql=$db->prepare("SELECT * FROM movie_tbl WHERE title='$name'");
            $sql->execute();
            while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                extract($row);
            ?>

            <div class="col-sm-4" align="center">
                <form method="post" action="manage_cart.php">
                    <img src="admin/images/<?php echo $poster; ?>" width="200" height="300" style="border-radius: 50px; border: 2px solid black;"><br>
                    <h4><?php echo $title; ?></h4>  
                    Cast : <?php echo $cast; ?> <br>   
                    Trailer Link: <a href="<?php echo $trailer_link; ?>" target="_blank">Watch Trailer</a>
              <br><br> <bR>
            </form>
            </div>
          <?php } ?>
        </div>
    
</body>
</html>