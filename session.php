<?php 
session_start();
	$id = session_id();
	if ($_SESSION['id']!=$id) {
		session_destroy();
		header('location:login.php');
	}

 ?>