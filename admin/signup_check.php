<?php
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$con = new mysqli('localhost','root','','gallery');
	$query = "SELECT * FROM signup WHERE s_email = '$email' and s_pass = '$pass'";

	$result = $con->query($query);

	/*echo "<pre>";
	print_r($result);*/

	$rows = mysqli_num_rows($result);
	$data = $result->fetch_object();

	if($rows==1) {
		session_start();
		$_SESSION['id'] = session_id();
		$_SESSION['user_id'] = $data->s_id;
		$_SESSION['name'] = $data->s_name;
		$_SESSION['type'] = $data->s_contact;
		$_SESSION['wheels'] = $data->s_email;
		$_SESSION['fuel'] = $data->s_pass;
		$_SESSION['number'] = $data->c_pass;
		header('location:index.php');

	}else{
		echo "invalid email and password";
	}
?>