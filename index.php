<?php 
    session_start();
        ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Zoom UI Kit One Page Portfolios Template</title>

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <!-- font awesome -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/superslide/superslides.css">

        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" href="css/themes/default/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/animate/animate.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">





        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
       
        <?php 
         //Loading header
         include("parts/menu.php");
         ?>
      

        <?php
        if(isset($_GET["page"]))
        {
              //
              $page = $_GET["page"];
              
              switch ($page) {
                  case 'login':
                      include("login.php");
                      break;
                  case 'register':
                      include('register.php');
                      break;
                  default:
                      include("parts/content.php");
                      break;
              }
        }

        else
        {
            include('parts/content.php');
        }

        ?>


        <?php 
             //loading footer
            include("parts/footer.php");
         ?>
        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>






        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery/jquery.js"></script>

        <script src="js/script.js"></script>
        <script src="js/check.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL6gbhsnCEt4FS9D6BBl3mZO1xy-NcwpE&sensor=false"></script>
        <script src="js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="js/superslide/jquery.superslides.js"></script>
        <script src="js/wow/wow.min.js"></script>


    </body>
</html>
