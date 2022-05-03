<?php 
    try {
        include 'connection.php';
        $sql="INSERT INTO user_tbl(name, email, phone, age, gender, password) VALUES(?,?,?,?,?,?)";
        $sq= $db->prepare($sql);
    
        $name= $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email= $_POST['email'];
        $password= $_POST['password'];
    
        if($sq->execute(array($name,$email,$phone, $age, $gender, $password))){   
            echo "<script>
                    alert('Register successfully.');
                    window.location.href='homepage.php';
                    </script>";
        }
        else echo "FAILED";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>