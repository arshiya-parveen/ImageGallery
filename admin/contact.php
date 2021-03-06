<?php 
    require_once 'session.php';
  $con = new mysqli('localhost','root','','gallery');

  $query = "SELECT * FROM contact";

  $result = $con->query($query);

 ?>
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
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="80%"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
         
          <ul class="nav navbar-nav navbar-right">
           
            <li class="dropdown">
              <div class="btn-group">
               <button type="button" class="btn btn-info dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
               Hi <?php echo $_SESSION['name'];?> <span class="caret"></span></button></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            </li>
            <li> <a class="btn btn-danger" href="logout.php" role="button">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- category section -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
          <div class="col-md-2 sidebar">
            <ul>
              <li><a href="index.php">Dashboard</a></li>
              <li><a href="image-upload.php">Image Upload</a></li>
              <li><a href="feedback.php">Feedback</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            
          </div>
          <!-- dashboard section -->
         
              <div class="col-md-10">
               <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="padding-top: 50px;">
                      <h2 style="padding-bottom: 20px;">Contact Inquiries</h2>
                      <div class="table-responsive">
                      <table class="table table-bordered table-striped" style="width:100%;">
                        <tr>
                          <th>Sr.No.</th>
                          <th>Name</th> 
                          <th>Email</th>
                          <th>Contact No.</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                        <?php 
                        while ($data = $result->fetch_object()) {
                          echo "<tr>";
                            echo "<td> $data->c_id";
                            echo "<td> $data->c_name";
                            echo "<td> $data->c_email";
                            echo "<td> $data->c_contact";
                            echo "<td> $data->c_message";
                            echo "<td>";
                            echo " <a href='cdelete.php?id=$data->c_id' type='button' class='btn btn-danger'>Delete</a>";
                            echo "<td>";
                          echo "</tr>";
                        }

                       ?>
                      </table>
                    </div>
                    </div>
                    <div class="col-md-1"></div>
                  </div>
                </div>
               </div> 
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
     <!-- Footer section -->
     <div class="container-fluid" style="padding: 0;">
       <div class="footer text-center">
         <p>Copyright &copy; 2020 All Rights Reserved WebGurukul</p>
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