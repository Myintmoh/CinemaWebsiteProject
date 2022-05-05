<?php 
    include 'admin/connectionpdo.php';
    try {
        $sql="INSERT INTO comment_tbl(name, email, phone, comment) VALUES (?,?,?,?)";
        $sq=$db->prepare($sql);

        $customername = $_POST['name'];
        $customeremail = $_POST['email'];
        $customerphone = $_POST['phone'];
        $comment = $_POST['comment'];

        if($sq->execute(array($customername,$customeremail,$customerphone,$comment))){
            echo "<script>
                    alert('Comment Sent');
                    window.location.href='contact.php';
                    </script>";
        }
        else echo "<script>
                    alert('Comment Cannot Be Sent');
                    window.location.href='contact.php';
                    </script>";
    }
    catch (Exception $e) {
        echo $e->getMessage;
    }
?>