<?php 
    include 'admin/connectionpdo.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Description</title>
</head>
<body>
<div class="row" style="margin-top: 100px;">
    <center>
        <div class="heading_container heading_center" style="border-radius: 10px;width: 58%; margin-bottom: 30px; background-color: #0AA1DD;">
            <h3 style="margin-bottom: -10px;margin-top: 10px; color: white;"><?php echo $_POST['name'];?></h3> <br>
        </div>
    </center>
    <?php 
        $name=$_POST['name'];
        $sql=$db->prepare("SELECT * FROM movie_tbl WHERE title='$name'");
        $sql->execute();
        while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            ?>
            <div align="center">
                <form method="post" action="">
                    <table>
                        <tr>
                            <td rowspan="5"><img src="admin/images/<?php echo $poster; ?>" width="200" height="300" style="border-radius: 10px; border: 2px solid black;"><br></td>
                            <td width="5%"></td>
                            <td width="350"><font size="3"><b>Cast : </b></font><?php echo $cast; ?> <br>  </td>
                        </tr>
                        <tr>
                            <td width="5%"></td>
                            <td><font size="3"><b>Duration : </b></font><?php echo $duration; ?></td>
                        </tr>
                        <tr>
                            <td width="5%"></td>
                            <td style="text-align: justify;"><font size="3"><b>Description : </b></font><?php echo $description; ?></td>
                        </tr>
                        <tr>
                            <td width="5%"></td>
                            <td style="text-align: justify;"><font size="3"><b>Release Date : </b></font><?php echo $release_date; ?></td>
                        </tr>
                        <tr>
                            <td width="5%"></td>
                            <td><a href="<?php echo $trailer_link; ?>" target="_blank" class="btn btn-danger">Watch Trailer</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td height="50"></td>
                        </tr>
                    </table>
                    <br><br> <bR>
                </form>
            </div>
    <?php } ?>
</div>
<div style="margin-bottom: -350px;"></div>
<?php include 'footer.php'; ?>
</body>
</html>