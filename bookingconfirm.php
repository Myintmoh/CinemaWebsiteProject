<?php 
    include 'admin/connectionpdo.php';
    try {
        $sql="INSERT INTO booking_tbl(customer_name, email, phone, movie_name, date, time, number_of_seats, amount, status) VALUES (?,?,?,?,?,?,?,?,?)";
        $sq=$db->prepare($sql);

        $name = $_POST['cus_name'];
        $mail = $_POST['cus_mail'];
        $phone = $_POST['cus_phone'];
        $movie = $_POST['movie_name'];
        $date = $_POST['movie_date'];
        $time = $_POST['movie_time'];
        $seats = $_POST['seat_amount'];
        $amount = $_POST['total_amount'];
        $status = 'pending';

        if($sq->execute(array($name,$mail,$phone,$movie, $date, $time, $seats, $amount, $status))){
            echo "<script>
                    alert('Your Order Have Been Confirmed');
                    window.location.href='profile.php';
                    </script>";
        }
        else echo "<script>
                    alert('Please Try Again');
                    window.location.href='home.php';
                    </script>";
    }
    catch (Exception $e) {
        echo $e->getMessage;
    }
?>