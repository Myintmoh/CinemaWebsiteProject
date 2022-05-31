<?php
    session_start();
    include('admin/connectionmysqli.php');
    extract($_POST);
    mysqli_query($con,"insert into  user_tbl values(NULL, '$name','$email','$phone','$age','$gender', '$password')");
    $id=mysqli_insert_id($con);
    // mysqli_query($con,"insert into  tbl_login values(NULL,'$id','$email','$password','2')");
    $_SESSION['user']=$id;
    header('location:homepage.php');
?>