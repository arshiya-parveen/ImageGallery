
<?php 

$name = $_POST['fname'];
$email = $_POST['femail'];
$rating = $_POST['frating'];
$sugg = $_POST['suggestion'];

$con = new mysqli('localhost','root','','gallery');

	$query = "INSERT INTO feedback VALUES (NULL, '$name', '$email', '$rating', '$sugg')";

	if ($con->query($query)) {
		header('location:admin/feedback.php');
	} else {
		echo mysqli_error($con);
	}



 ?>