<?php 

$name = $_POST['cname'];
$email = $_POST['cemail'];
$contact = $_POST['ccontact'];
$mess = $_POST['message'];

$con = new mysqli('localhost','id14239803_imagegallery','Eya}G)Sz{ln<Q^16','id14239803_gallery');

	$query = "INSERT INTO contact VALUES (NULL, '$name', '$email', '$contact', '$mess')";

	if ($con->query($query)) {
		header('location:admin/contact.php');
	} else {
		echo mysqli_error($con);
	}



 ?>