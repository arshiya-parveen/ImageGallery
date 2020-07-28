<?php 

$name = $_POST['sname'];
$contact = $_POST['scontact'];
$email = $_POST['semail'];
$pass = $_POST['spass'];
$conpass = $_POST['cpass'];


$con = new mysqli('localhost','root','','gallery');

	$query = "INSERT INTO signup VALUES (NULL, '$name', '$contact',  '$email','$pass','$conpass')";

	if ($con->query($query)) {
		header('location:signup_view.php');
	} else {
		echo mysqli_error($con);
	}




 ?>