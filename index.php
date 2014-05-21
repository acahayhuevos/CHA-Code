<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <?php
          session_start();

          $_SESSION['username'] = "Putin" ;
          $_SESSION['userid'] = "2" ;
          $_SESSION['avatar'] = "images/u2.jpg";

          $_SESSION['type'] = "0";
 
        ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CHA!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  
        <!-- NAVIGATION BAR -->

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
              <li class="active"><a href="#"><span class="glyphicon glyphicon-tower"></span> Home</a></li>
              <li><a href="#about"><span class="glyphicon glyphicon-plane"></span> Explore</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Me <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">My Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
            
            <div class="navbar-header  navbar-right">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">CHA!</a>
            </div>

          </div></nav>

        <!-- POST FORM -->

        <div class="container wrap">
          <form role="form" action="post.php" method="POST">
            <div class="form-group">
              <textarea id="chapost" class="form-control post" placeholder="Post a new challenge"></textarea>
            </div>

            <div class="count">

              <input type="text" class="form-control url" placeholder="paste url">
              <input type="text" class="form-control tag" placeholder="#tag1 #tag2 #tag3">

              <button type="button" class="btn btn-primary submitpost0"></button>
                
                <button type="button" class="btn btn-link imgurl pull-left">
                  <span class="glyphicon glyphicon-camera"></span>
                </button>

                <button type="button" class="btn btn-link tagbtn pull-left">
                  <span class="glyphicon glyphicon-tags"></span>
                </button>

            </div>
            
          </form>

        <!-- CONTENT FORM -->

        <section id="timeline">

        </section>

      
      </div>
        
      </div> 

      <!-- /container --> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pagination.js"></script>
        <script src="js/vendor/jquery.ui.widget.js"></script>
    </body>
</html>

<!--

          <div class="replay well">
            
            <aside>
              <div class="avatar2">
                <img src="images/u2.jpg" class="img-circle img-responsive" alt="username">
              </div>
            </aside>

            <div class="content">
              <p>I Just did it, it was fucking awesome dude, you had to see their faces while i was doing it, it was like the bes thing ever, i love this page!</p>

              <div id="vote">
                <button type="submit" class="btn btn-link vote">
                  <span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="submit" class="btn btn-link vote">
                  <span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
              </div>

            </div>
          </div>

  -->
