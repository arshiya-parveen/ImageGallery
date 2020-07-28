<?php 

$id = $_GET['id'];

$con = new mysqli('localhost','root','','gallery');

$query = "DELETE FROM signup WHERE s_id = '$id'";


if ($con->query($query)) {
	header('location:signup_view.php');
} else {
	echo mysqli_error($con);
}


 ?>