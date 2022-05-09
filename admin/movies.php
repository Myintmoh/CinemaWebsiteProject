<?php 
    // include 'adminheader.php';
    include 'connectionpdo.php';
    $sql = $db->prepare("SELECT * FROM movie_tbl");
    $sql->execute();
?>
<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>Movies</h1>
			</div>
            <form method="post" enctype="multipart/form-data">
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Enter Movie Title" name="title" required>
                <label for="description"><b>Description</b></label>
                <textarea placeholder="Enter Movie Description" name="description" required></textarea>
                <label for="cast"><b>Cast</b></label>
                <input type="text" placeholder="Enter Cast Name" name="cast" required>
                <label for="duration"><b>Duration</b></label>
                <input type="text" placeholder="Enter Movie Duration" name="duration" required>
                <label for="link"><b>Trailer Youtube Link</b></label>
                <input type="text" placeholder="Enter Movie Trailer Link" name="link" required>
                <label for="status"><b>Status</b></label>
                <input type="text" placeholder="Enter Status" name="status" required>
                <label for="date"><b>Release Date</b></label>
                <input type="date" name="date" required>
                <label for="photo"><b>Upload Poster</b></label>
                <input type="file" name="image">
                <button type="submit" class="signupbtn" name="submit">Add Movies</button>
                <input type="reset" value="Cancel">
		    </form>
		    <!-- <a href="viewdata.php">View Data</a> -->
            <?php 
                if(isset($_FILES['image'])){
                    $errors = array();
                    $filename = $_FILES['image']['name'];
                    $filesize = $_FILES['image']['size'];
                    $filetmp = $_FILES['image']['tmp_name'];
                    $filetype = $_FILES['image']['type']; /**images/png**/
                    $fext = explode("/", $filetype);
                    $file_ex = strtolower(end($fext));
                    $extention = array("jpeg","jpg","png","gif");
    
                    if (in_array($file_ex, $extention)==FALSE) {
                        $errors[] = "please upload valid file type";
                    }
                    else if ($filesize > 2097152){
                        $errors[] = "file size is too big";
                    }
                    else if(empty($errors)==TRUE){
                        move_uploaded_file($filetmp, "images/".$filename);
                        echo "Success!!!";
                    }
                    else echo $errors;
                }
                else return FALSE;

                try {
                    include 'connectionpdo.php';
                    $sql="INSERT INTO movie_tbl(title, poster, release_date, description, cast, duration, trailer_link, status) VALUES(?,?,?,?,?,?,?,?)";
                    $sq= $db->prepare($sql);
                    $title= $_POST['title'];
                    $description= $_POST['description'];
                    $cast= $_POST['cast'];
                    $duration = $_POST['duration'];
                    $link = $_POST['link'];
                    $photo= $filename;
                    $status=$_POST['status'];
                    $date=$_POST['date'];
                    if($sq->execute(array($title, $photo, $date, $description, $cast, $duration, $link, $status))){   
                        echo "<script>
                                alert('Movie added successfully.');
                                window.location.href='adminproducts.php';
                                </script>";
                    }
                        else echo "FAILED";
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                $db=null;
            ?>
		</div>
	</div>