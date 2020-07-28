<?php 
require_once 'session.php';

$con = new mysqli('localhost','root','','gallery');

  $query = "SELECT * FROM image";

  $result = $con->query($query);

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Image Gallery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body>
      <?php require_once 'header.php'; ?>


       <!-- php section -->
       <div class="container">
        <div class="row gallery">
          <h1 class="text-center">Gallery</h1>
          
            
              <?php 
                                echo "<div class='col-md-12'>";
                                echo "<div class='row'>";
                                $i = 1;
                              while ($data = $result->fetch_object()) {
                                
                                echo "<div class='col-md-3 col-sm-6 col-xs-12'>";
                                echo "<div class='hovereffect hover ehover10'>";
                                  echo "<img src='admin/uploads/$data->i_image' class='thumbnail' width='200'>";
                                  echo "<div class='overlay'>";
                                    echo "<button class='info' data-toggle='modal' data-target='#modal$i'>Download</button>";
                                    echo "</div>";
                                  echo "</div>";
                                echo "</div>";

                                echo "<div class='modal fade' id='modal$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
                                echo "<div class='modal-dialog' role='document'>";
                                  echo "<div class='modal-content'>";
                                    echo "<div class='modal-header'>";
                                      echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                     echo  "<h4 class='modal-title' id='myModalLabel'>Download Image</h4>";
                                    echo "</div>";
                                    echo "<div class='modal-body'>";
                                      echo "<img src='admin/uploads/$data->i_image' alt='' class='img-responsive'>"; 
                                    echo "</div>";
                                    echo "<div class='modal-footer'>";
                                      echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
                                      echo "<a href='download.php?nama=admin/uploads/$data->i_image'><button type='button' class='btn btn-primary'>Download</button></a>";
                                    echo "</div>";
                                  echo "</div>";
                                echo "</div>";
                              echo "</div>";
                              $i++;
                                
                              }
                              echo "</div>";
                              echo "</div>";

              ?>
          
        </div>
       </div>
          
          <!-- Gallery section -->
    <!-- <div class="container">
      <div class="row gallery">
          <h1 class="text-center">Gallery</h1>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="hovereffect hover ehover10">
                <img src="img/a.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal1">Download
                  </button>          
                </div>
               
              </div>  
            </div>
             modal box
                  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/1.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
                closing modal
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/b.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal2">Download
                  </button>          
                </div>
                
              </div>
            </div> 
            modal box
                  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/2.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div> 
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/c.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal3">Download
                  </button>          
                </div>
                
              </div>       
            </div>
            modal box
                  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/3.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="hovereffect hover ehover10">
                <img src="img/d.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal4">Download
                  </button>          
                </div>
                
              </div>        
            </div>
            modal box
                  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/4.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
    
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/e.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal5">Download
                  </button>          
                </div>
                
              </div>
            </div>
              modal box
                  <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/5.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/f.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal6">Download
                  </button>          
                </div>
               
              </div>
            </div>
               modal box
                  <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/6.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/g.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal7">Download
                  </button>          
                </div>
                
              </div>
            </div>
                modal box
                  <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/7.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/h.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal8">Download
                  </button>          
                </div>
                
              </div>
               
            </div>
              modal box
                  <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/8.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
          </div>
        </div>
    
        opening
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/i.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal9">Download
                  </button>          
                </div>
                
              </div>
            </div>
            modal box
                  <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/9.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/j.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal10">Download
                  </button>          
                </div>
                
              </div> 
            </div> 
            modal box
                  <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/10.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>  
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/k.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal11">Download
                  </button>          
                </div>
                
              </div>
                         
            </div>
            modal box
                  <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/11.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/l.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal12">Download
                  </button>          
                </div>
                
              </div>       
            </div>
            modal box
                  <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/12.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
          </div>
        </div>
    
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
    
                <div class="hovereffect hover ehover10">
                <img src="img/m.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal13">Download
                  </button>          
                </div>
                
              </div>
                
            </div>
            modal box
                  <div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/13.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="hovereffect hover ehover10">
                <img src="img/n.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal14">Download
                  </button>          
                </div>
                
              </div>
                
            </div>
            modal box
                  <div class="modal fade" id="modal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/14.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
    
                <div class="hovereffect hover ehover10">
                <img src="img/o.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal15">Download
                  </button>          
                </div>
               
              </div>
                
            </div>
             modal box
                  <div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/15.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
            <div class="col-md-3 col-sm-6 col-xs-12">
    
                <div class="hovereffect hover ehover10">
                <img src="img/p.jpg" alt="" class="thumbnail img-responsive"> 
                <div class="overlay">
                  <button class="info" data-toggle="modal" data-target="#modal16">Download
                  </button>          
                </div>
                
              </div>
                
            </div>
              modal box
                  <div class="modal fade" id="modal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Download Image</h4>
                      </div>
                      <div class="modal-body">
                        <img src="img/16.jpg" alt="" class="img-responsive"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Download</button>
                      </div>
                    </div>
                  </div>
                </div>
    
          </div>
        </div>
        closing
      </div>
    </div> -->

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