<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
        <?php

          session_start();
          $_SESSION['type'] = "-1";

        ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CHA! Sign In</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="http://faviconist.com/icons/6bcc3804767364c4d7354d948b1ad96d/favicon.ico" />

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
              }

        </style>

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/landing.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
       
     <body>
    <div id="bg">
      <div class="fadein">
      <img id="f3" src="images/landing3.jpg">
      <img id="f2" src="images/landing2.jpg">
      <img id="f1" src="images/landing1.jpg">
      </div> 
    </div>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
   
        <nav class="navbar-default navbar-fixed-top" role="navigation">
          
          <div class="container">

          <div class="navbar-collapse collapse navbar-right">

          <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-link">
                <span class="glyphicon glyphicon-search"></span>
              </button>
          </form>

            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php"><span class="glyphicon glyphicon-tower"></span> Home</a></li>
              <li><a href="explore.php"><span class="glyphicon glyphicon-plane"></span> Explore</a></li>
              <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            </ul>
          </div>

          <script type="text/javascript">

          </script>


            <div class="navbar-header  navbar-right">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">CHA!</a>
            </div>

          </div>
        </nav>

    <div class="container">
      
      <form class="form-signin" role="form">
          <h2 class="form-signin-heading"> CHA!</h2>
          <h3 class="slogan"> Join the challenge and change your life.</h6>
          <br>
          <input type="email" class="form-control" placeholder="Email address"  required autofocus>
          <input type="password" class="form-control" placeholder="Password" id="input" required>
          <div id="extrainput" style="display:none;">
            <input type="text" class="form-control" placeholder="username" required autofocus>
            <input type="text" class="form-control" placeholder="avatar url" required>
          </div>
          <button class="btn btn-lg btn-danger btn-block" id="signinbtn" type="button"> Sign in </button>
        
        <div id="msg0"></div>

      </form>

    </div>


    <!-- /container -->  



   <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                   <form class="form-login" role="form">
                        <h2 class="form-login-heading"> CHA!</h2>
                        <h3 class="slogan">No pain no gain, no risk no progress</h6>
                        <br>
                        <input type="email" class="form-control" placeholder="Email address" required autofocus style="border-color: #BBBBBB; margin-bottom:8px;">
                        <input type="password" class="form-control" placeholder="Password" required style="border-color: #BBBBBB; margin-bottom:8px;">
                        <button class="btn btn-lg btn-success btn-block" id="loginbtn" type="button"> Log in </button>
                      </div>
                    </form>
                  <div class="modal-footer" style="margin-top: 0px; ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <div id="msg1"></div>
                  </div>
                </div>
              </div>
    </div>
            

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/authentication.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <!--<script src="js/main.js"></script>-->

    </body>
</html>
