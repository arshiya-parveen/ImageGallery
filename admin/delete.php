<?php 

$id = $_GET['id'];

$con = new mysqli('localhost','root','','gallery');

$query = "DELETE FROM feedback WHERE id = '$id'";


if ($con->query($query)) {
	header('location:feedback.php');
} else {
	echo mysqli_error($con);
}


 ?>