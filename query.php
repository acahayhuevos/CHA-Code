<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <?php
          session_start();
          $tag = $_GET["tag"];

          $_SESSION['type'] = "1";
          $_SESSION['tag'] = $_GET["tag"];

        ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <?php
        echo "<title>CHA! #".$tag."</title>";
        ?>

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
              <li><a href="index.php"><span class="glyphicon glyphicon-tower"></span> Home</a></li>
              <li class="active"><a href="explore.php"><span class="glyphicon glyphicon-plane"></span> Explore</a></li>
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



        <div class="container wrap">

        <!-- POST FORM -->

        <div class="container wrap">
          <form role="form" action="post.php" method="POST">
            <div class="form-group">
              <textarea id="chapost" class="form-control post" placeholder="Post a new challenge"></textarea>
            </div>

            <div class="count">

              <input type="text" class="form-control url" placeholder="paste url">
              <?php echo "<input type='text' class='form-control tag' placeholder='#".$tag."'>" ?>

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

         <?php echo "<h1 style='margin-bottom:20px;'><span class='label label-default'>#".$tag."</span></h1>"; ?>
          <section id="timeline">

          </section>
      
        </div>
        
      </div> 

      <!-- /container --> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vote.js"></script>
        <script src="js/pagination.js"></script>
        <script src="js/vendor/jquery.ui.widget.js"></script>
    </body>
</html>