
<?php
require_once 'session.php';
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<a href="logout.php"><h1>Logout</h1></a>
		<h1>Welcome to world</h1>
		<h1>hello <?php echo $_SESSION['name'];?></h1>
		
	</body>
	</html>
	