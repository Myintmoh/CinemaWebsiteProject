<?php 
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
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
            <div align="left" style="margin-left: 50px; margin-top: 50px;">
                <form method="post" action="">
                    <table>
                        <tr>
                            <td rowspan="5"><img src="admin/images/<?php echo $poster; ?>" width="200" height="300" style="border-radius: 10px; border: 2px solid black;"><br></td>
                            <td width="5%"></td>
                            <td width="300"><font size="3"><b>Cast : </b></font><?php echo $cast; ?> <br>  </td>
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
                            <td style="text-align: justify;"></td>
                        </tr>
                        <tr>
                            <td width="5%"></td>
                            <td><a href="<?php echo $trailer_link; ?>" target="_blank" class="btn btn-danger">Watch Trailer</a></td>
                        </tr>
                    </table>
                    <br><br> <bR>
                </form>
            </div>
    <?php } ?>
    
    <!-- booking table -->
    <div align="center" style="margin-top: -380px; margin-right: -555px;">
        <form method="post" action="bookingprocess.php">
            <input type="hidden" value="<?php echo $title ?>" name="movie_name">
            <table class="table table-hover table-bordered text-center" style="width: 600px;">
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Date</center></b></font></td>
                    <td width="350">
                        <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
                            <select class="btn btn-default" name="date">
                                <option value="<?php echo date('d-m-Y');?>"><?php echo date('d-m-Y');?></option>
                                <option value="<?php echo date('d-m-Y', strtotime("+1 days"));?>"><?php echo date('d-m-Y', strtotime("+1 days"));?></option>
                                <option value="<?php echo date('d-m-Y', strtotime("+2 days"));?>"><?php echo date('d-m-Y', strtotime("+2 days"));?></option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Time</center></b></font></td>
                    <td width="350">
                        <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
                            <select class="btn btn-default" name="time">
                                <option value="11:15 AM">11:15 AM</option>
                                <option value="3:00 PM">3:00 PM</option>
                                <option value="7:00 PM">7:00 PM</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Amount Per Seat</center></b></font></td>
                    <td width="350">
                        <div class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 15px;">
                            <?php echo $seat_prize;?> MMK
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Number of Seats</center></b></font></td>
                    <td width="350">
                        <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
                            <input type="number" required tile="Number of Seats" max="5" min="0" name="seats" class="form-control" value="1" style="text-align: center;">
                            <input type="hidden" value="<?php echo $seat_prize;?>" name="seat_prize">    
                        </div>
                    </td>
                </tr>   
                <tr>
                    <td width="350" colspan="2">
                        <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
                            <button class="btn btn-info" style="width: 600px;">Book Now</button> 
                        </div>
                    </td>
                </tr>  
            </table>
            <br><br> <bR>
        </form>
    </div>
</div>
<div style="margin-top: -350px;"></div>
<?php include 'footer.php'; ?>
</body>
</html>