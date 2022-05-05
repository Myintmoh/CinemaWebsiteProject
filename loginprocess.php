<?php
include 'admin/connectionmysqli.php';
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];

$qry=mysqli_query($con,"select * from user_tbl where email='$email' and password='$pass'");
if(mysqli_num_rows($qry))
{
	$usr=mysqli_fetch_array($qry);
		$_SESSION['user']=$usr['user_id'];
		if(isset($_SESSION['show']))
		{
			header('location:booking.php');
		}
		else
		{
			header('location:homepage.php');
		}
}
else
{
	$_SESSION['error']="Login Failed!";
	header("location:login.php");
}
?>