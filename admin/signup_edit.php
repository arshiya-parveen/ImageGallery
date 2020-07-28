<?php 
  $id = $_GET['id'];

  $con = new mysqli('localhost','root','','gallery');
  $query = "SELECT * FROM signup WHERE s_id = '$id'";

  $result = $con->query($query);

  $data = $result->fetch_object();

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>sign up page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body style="background-color: #E9AA28;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="background-color: #fff;padding: 20px 40px;margin: 50px 0;">
              <div class="text-center">
              <img src="img/logo.png" alt="" width="80%">
              </div>
              <h1 class="text-center">Sign Up</h1>
              <p>It's free and only takes a minute...</p>
              <form action="signup_update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data->s_id ?>">
                <div class="form-group">
                  <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="sname" value="<?php echo $data->s_name ?>">
                </div>
                <div class="form-group">
                  <label for="number">Contact No.</label>
                <input type="text" class="form-control" id="number" maxlength="10" placeholder="Contact" name="scontact" value="<?php echo $data->s_contact ?>">
                </div><div class="form-group">
                  <label for="email">Email Address</label>
                 <input type="email" class="form-control" id="email" placeholder="Email" name="semail" value="<?php echo $data->s_email ?>">
                </div>
                <div class="form-group">
                  <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" placeholder="Password" name="spass" value="<?php echo $data->s_pass ?>">
                </div>
                
                <div class="form-group">
                  <label for="password2">Confirm Password</label>
                <input type="password" class="form-control" id="password2" placeholder="Confirm Password" name="cpass" value="<?php echo $data->c_pass ?>">
                </div>
                
                <button type="submit" class="btn btn-default" value="Sign Up">Sign Up</button>
                <p class="bottom-text">By clicking the sign up button, you agree to our <a href="">Terms & condition</a> and <a href="">Privacy policy.</a></p>
              </form>
              <p class="footer-text">Already have an account, <a href="login.php"> Login here</a></p>
              
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>       


    <!-- fontawesom -->
    <script src="js/all.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>