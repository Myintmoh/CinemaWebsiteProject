<?php 
    include 'header.php';
    if(!isset($_SESSION['user'])) {
        header('location: login.php');
    }
    if(isset($_POST['book']))
    {
        $seat_quantity = $_POST['seats'];
        $seat_prize = $_POST['seat_prize'];
        $amount = $seat_quantity * $seat_prize;
    }
?>
<div class="row" style="margin-top: 100px;">
    <center>
        <div class="heading_container heading_center" style="border-radius: 10px;width: 58%; margin-bottom: 30px; background-color: #0AA1DD;">
            <h3 style="margin-bottom: -10px;margin-top: 10px; color: white;">Booking Confirmation</h3> <br>
        </div>
    </center>
    <div align="center">
        <form method="post" action="bookingconfirm.php">
            <table class="table table-hover table-bordered text-center" style="width: 600px;">
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Movie Name</center></b></font></td>
                    <td width="350"><div style="padding-top: 15px; padding-bottom: 10px;"><?php echo $_POST['movie_name'];?></div></td>
                    <input type="hidden" name="movie_name" value="<?php echo $_POST['movie_name'];?>">
                </tr>
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Date</center></b></font></td>
                    <td width="350"><div style="padding-top: 15px; padding-bottom: 10px;"><?php echo $_POST['date'];?></div></td>
                    <input type="hidden" name="movie_date" value="<?php echo $_POST['date'];?>">
                </tr>
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Time</center></b></font></td>
                    <td width="350"><div style="padding-top: 15px; padding-bottom: 10px;"><?php echo $_POST['time'];?></div></td>
                    <input type="hidden" name="movie_time" value="<?php echo $_POST['time'];?>">
                </tr> 
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Number of Seats</center></b></font></td>
                    <td width="350"><div style="padding-top: 15px; padding-bottom: 10px;"><?php echo $_POST['seats'];?></div></td>
                    <input type="hidden" name="seat_amount" value="<?php echo $_POST['seats'];?>">
                </tr>   
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Total Amount</center></b></font></td>
                    <td width="350"><div style="padding-top: 15px; padding-bottom: 10px;"><?php echo $_POST['seats']*$_POST['seat_prize'];?> MMK (<?php echo $_POST['seat_prize'];?> x <?php echo $_POST['seats'];?>)</div></td>
                    <input type="hidden" name="total_amount" value="<?php echo $_POST['seats']*$_POST['seat_prize'];?>"> 
                </tr>  
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Customer Name</center></b></font></td>
                    <td width="350"><input style="padding-top: 10px; padding-bottom: 10px; width: 100%;" type="text" name="cus_name" placeholder="Enter Your Name" required></td>
                </tr>  
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Customer Email</center></b></font></td>
                    <td width="350"><input style="padding-top: 10px; padding-bottom: 10px; width: 100%;" type="text" name="cus_mail" placeholder="Enter Your Email" required></td>
                </tr>
                <tr>
                    <td width="300"><font size="3" class="col-md-12 text-center" style="padding-top: 15px; padding-bottom: 10px;"><b><center>Customer Phone Number</center></b></font></td>
                    <td width="350"><input style="padding-top: 10px; padding-bottom: 10px; width: 100%;" type="text" name="cus_phone" placeholder="Enter Your Phone Number" required></td>
                </tr>
                <tr>
                    <td width="350" colspan="2">
                        <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
                            <button class="btn btn-info" style="width: 600px;">Booking Confirm</button> 
                        </div>
                    </td>
                </tr>  
            </table>
            <br><br> <bR>
        </form>
    </div>
</div>
<div style="margin-top: -350px;"></div>
<?php include 'footer.php';?>