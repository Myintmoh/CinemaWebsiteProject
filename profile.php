<?php 
include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from movie_tbl where movie_id='".$_SESSION['movie']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
<div class="content" style="margin-top: 80px;">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
                    <center>
                        <div class="heading_container heading_center" style="border-radius: 10px;width: 58%; margin-bottom: 30px; background-color: #0AA1DD;">
                            <h3 style="margin-bottom: -10px;margin-top: 10px; color: white;">BOOKING HISTORY</h3> <br>
                        </div>
                    </center>
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from booking_tbl where customer_name='".$user['name']."' and status='confirmed' or 'pending'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table class="table table-bordered">
						<thead>
						<th>Booking Id</th>
						<th>Movie</th>
						<th>Customer Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Seats</th>
						<th>Amount</th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"SELECT * FROM booking_tbl WHERE customer_name='".$user['name']."'");
							$mov=mysqli_fetch_array($m);
							?>
							<tr>
								<td>
									<?php echo $mov['booking_id'];?>
								</td>
								<td>
									<?php echo $mov['movie_name'];?>
								</td>
								<td>
									<?php echo $mov['customer_name'];?>
								</td>
								<td>
									<?php echo $mov['date'];?>
								</td>
								<td>
									<?php echo $mov['time'];?>
								</td>
								<td>
									<?php echo $mov['number_of_seats'];?>
								</td>
								<td>
									<?php echo $mov['amount'];?> MMK
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3 style="color:red;" class="text-center">No Previous Bookings Found!</h3>
					<p style="text-align: center;">Once you start booking movie tickets with this account, you'll be able to see all the booking history.</p>
					<?php
				}
				?>
					</div>			
				
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<div style="margin-top: -200px;"></div>
<?php include('footer.php');?>
<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>