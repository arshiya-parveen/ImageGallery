<?php 
$id = $_POST['id'];
$name = $_POST['sname'];
$contact = $_POST['scontact'];
$email = $_POST['semail'];
$pass = $_POST['spass'];
$conpass = $_POST['cpass'];


$con = new mysqli('localhost','root','','gallery');

	$query = "UPDATE signup SET s_name ='$name',s_contact ='$contact',s_email ='$email',s_pass ='$pass',c_pass ='$conpass' WHERE s_id = '$id' ";

	if ($con->query($query)) {
		header('location:signup_view.php');
	} else {
		echo mysqli_error($con);
	}




 ?>