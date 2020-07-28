<?php 

$id = $_GET['id'];

$con = new mysqli('localhost','root','','gallery');

$query = "DELETE FROM contact WHERE c_id = '$id'";


if ($con->query($query)) {
	header('location:contact.php');
} else {
	echo mysqli_error($con);
}


 ?>