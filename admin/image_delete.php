<?php 

$id = $_GET['im_id'];

$con = new mysqli('localhost','root','','gallery');

$query = "DELETE FROM image WHERE i_id = '$id'";


if ($con->query($query)) {
	header('location:view.php');
} else {
	echo mysqli_error($con);
}


 ?>