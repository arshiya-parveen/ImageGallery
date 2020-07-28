
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body>
    <!-- header section -->
    <?php require_once 'header.php'; ?>
          
          
          <!-- Contact section -->
          <div class="container-fluid">
            <div class="row contact">
              <h1 class="text-center">Contact Us..</h1>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <form action="cont_getdata.php" method="post">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your name" name="cname">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputemail">Email</label>
                          <input type="email" class="form-control" id="exampleInpuemail" placeholder="Your email" name="cemail">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputemail">Contact No.</label>
                          <input type="number" class="form-control" id="exampleInpuemail" placeholder="Your contact" name="ccontact">
                      </div>
                      <div class="form-group">
                        <label for="examplemsg">Your message</label>
                        <textarea class="form-control" name="message" id="examplemsg" cols="30" rows="10" placeholder="your message"></textarea>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-default" value="submit">Submit</button>
                        <button type="Reset" class="btn btn-default" value="reset">Reset</button>
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

       <!-- Footer section -->

         <?php require_once 'footer.php'; ?>
                    
      
    <!-- fontawesom -->
    <script src="js/all.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    

  </body>
</html>