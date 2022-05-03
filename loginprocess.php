<?php
    include('header.php');
    include('connection.php');
    $sql=$db->prepare("SELECT * FROM user_tbl");
    $sql->execute();
    if (isset($_POST['Login'])) {
        $mail =$_POST['Email'];
        $pwd = $_POST['Password'];
        while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            if($mail!=$email || $pwd!=$password){
                echo "<script>
                        alert('Login Unsuccessful\nPlease Try Again');
                        window.loaction.href='login.php';
                        </script>";
            }
            else {
                echo "<script>
                        alert('Login Successful');
                        window.location.href='homepage.php';
                        </script>";
            }
        }
    } 
?>