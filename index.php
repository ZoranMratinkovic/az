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
<script type="text/javascript">

  function countdown(tm,id){
// Set the date we're counting down to
    var countDownDate = new Date(tm*1000).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        /*output = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        // Output the result in an element with id="demo"*/
        if(id==2)//kategorija vino
        {
          document.getElementById("vino").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
 
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }
        else if(id==1)//kategorija pivo
        {
          document.getElementById("pivo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }
        else if(id==3)//kategorija phone
        {
          document.getElementById("phone").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }
        else if(id==4)//kategorija laptop
        {
          document.getElementById("laptop").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }

        // If the count down is over, write some text 
        if (distance < 0 && id == 2) {
            updateVino();
            clearInterval(x);
             document.getElementById("vino").innerHTML = "Expired"
             document.getElementById("demo").innerHTML = "Expired";
        }
        else if(distance < 0 && id == 1)
        {
          updatePivo();
          clearInterval(x);
          document.getElementById("pivo").innerHTML = "Expired"
        }
         else if(distance < 0 && id == 3)
        {
          updatePhone();
          clearInterval(x);
          document.getElementById("phone").innerHTML = "Expired"
        }
         else if(distance < 0 && id == 4)
        {
          updateLaptop();
          clearInterval(x);
          document.getElementById("laptop").innerHTML = "Expired";
        }
    }, 1000);
}


function countdown1(tm,name_cat){
// Set the date we're counting down to
    var countDownDate = new Date(tm*1000).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        /*output = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        // Output the result in an element with id="demo"*/
        if(name_cat=='Vine')//kategorija vino
        {
          document.getElementById('vinoo').style.display='block';
          document.getElementById("vinoo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }
        else if(name_cat=='Beer')//kategorija pivo
        {
           document.getElementById('pivoo').style.display='block';
          document.getElementById("pivoo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }
        else if(name_cat=='Phones')//kategorija phone
        {
           document.getElementById('phoness').style.display='block';
          document.getElementById("phoness").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }
        else if(name_cat=='Laptops')//kategorija laptop
        {
           document.getElementById('laptopss').style.display='block';
          document.getElementById("laptopss").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        }

        // If the count down is over, write some text 
        if (distance < 0 && id == 2) {
            updateVino();
            clearInterval(x);
             document.getElementById("vino").innerHTML = "Expired"
             document.getElementById("demo").innerHTML = "Expired";
        }
        else if(distance < 0 && id == 1)
        {
          updatePivo();
          clearInterval(x);
          document.getElementById("pivo").innerHTML = "Expired"
        }
         else if(distance < 0 && id == 3)
        {
          updatePhone();
          clearInterval(x);
          document.getElementById("phone").innerHTML = "Expired"
        }
         else if(distance < 0 && id == 4)
        {
          updateLaptop();
          clearInterval(x);
          document.getElementById("laptop").innerHTML = "Expired";
        }
    }, 1000);
}
</script>




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
		<!--<div class='preloader'><div class='loaded'>&nbsp;</div></div>-->

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
                  case 'product':
                      include('product.php');
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





        <script src="js/check.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery/jquery.js"></script>

        <script src="js/script.js"></script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL6gbhsnCEt4FS9D6BBl3mZO1xy-NcwpE&sensor=false"></script>
        <script src="js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="js/superslide/jquery.superslides.js"></script>
        <script src="js/wow/wow.min.js"></script>

<script type="text/javascript">
  /*var output1 = countdown(timestamp1);
               document.getElementById('demo').innerHTML = output1;*/
              document.getElementById('bgimage').style.backgroundImage="url(<?php echo $pic ?>)";
            
               
              
              
             
</script>
    </body>
</html>
