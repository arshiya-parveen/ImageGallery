
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body{
        background: url(img/15.jpg);
        background-size: cover;
        opacity: 0.8;
      };

    </style>
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color: #fff;border-radius: 5px; padding: 20px 40px;margin: 50px 0;">
              <div class="text-center">
              <img src="img/logo.png" alt="" width="80%">
              </div>
              <h1 class="text-center">Login</h1>
              
              <form action="signup_check.php" method="post">
                <input type="hidden" name="id">
                <div class="form-group">
                  <label for="email">Email Address</label>
                 <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <input type="checkbox" name="remember" /> Remember Me
                </div>
                
                
                <button type="submit" class="btn btn-default" value="login">Login</button>
                <p class="bottom-text text-center">New user <a href="signup.php"> Sign up here</a></p>
                <p class="bottom-text text-center"><a href="">Forgot password?</a></p>
              </form>
              
              
            </div>
            <div class="col-md-4"></div>
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