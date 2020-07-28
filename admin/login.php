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

    
  </head>
  <body style="background-color: #E9AA28;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color: #fff;padding: 20px 40px;margin: 50px 0;">
              <div class="text-center">
              <img src="img/logo.png" alt="" width="80%">
              </div>
              <h1 class="text-center">Login</h1>
              
              <form action="signup_check.php" method="post">
               
                <div class="form-group">
                  <label for="email">Email Address</label>
                 <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" placeholder="Password" name="password">
                </div>
                
                
                <button type="submit" class="btn btn-default">Login</button>
                <p class="bottom-text text-center">New user <a href="signup.html"> Sign up here</a></p>
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