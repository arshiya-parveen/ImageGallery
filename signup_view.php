<?php 
    require_once 'session.php';
	$con = new mysqli('localhost','root','','gallery');

	$query = "SELECT * FROM signup";

	$result = $con->query($query);

 ?>

 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body>
    <div class="container">
        <h2>view data</h2>
    <a href="logout.php"><h1>Logout</h1></a>
    <a href="welcom.php"><h1>welcome</h1></a>

    	<table class="table">
    		<tr>
    			<th>user id</th>
    			<th>user name</th>
    			<th>user contact</th>
    			<th>user email</th>
          <th>user password</th>
    			<th>user confirm password</th>
    			<th>action</th>
    		</tr>

    		<?php 
    			while ($data = $result->fetch_object()) {
    				echo "<tr>";
    					echo "<td> $data->s_id";
    					echo "<td> $data->s_name";
    					echo "<td> $data->s_contact";
    					echo "<td> $data->s_email";
              echo "<td> $data->s_pass";
    					echo "<td> $data->c_pass";
    					echo "<td>";
    					echo "<a href='signup_edit.php?id=$data->s_id' type='button' class='btn btn-primary'>Edit</a> ";
    					echo " <a href='signup_delete.php?id=$data->s_id' type='button' class='btn btn-danger'>Delete</a>";
    					echo "<td>";
    				echo "</tr>";
    			}

    		 ?>
    	</table>
    </div>
                    
      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script>
      $('.carousel').carousel({
      interval: 1500, pause: null
    })
    </script>


  </body>
</html>