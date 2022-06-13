<?php
    include 'admin/connectionpdo.php';
    $did = $_GET['did'];
    $sql = $db->prepare("DELETE FROM booking_tbl WHERE booking_id='$did'");
    $sql->execute();
    echo "<script>
            alert('Booking Successfully Removed');
            window.location.href='profile.php';
            </script>";
    // header('location: adminmovies.php');
?>