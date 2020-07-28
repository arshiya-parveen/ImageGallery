<?php 


$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination = "uploads/". $image_name ;
	

	$con = new mysqli('localhost','root','','gallery');

	$query = "INSERT INTO image VALUES (NULL, '$image_name')";

	if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:index.php');
	} else {
		echo mysqli_error($con);
	}
	} else {
		echo "image hasn't uploaded";
	}

 ?>