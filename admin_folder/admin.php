<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>
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
    <!-- Bootstrap Core CSS -->
     <!--<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="admin.php?word=products">Products</a>
                </li>
                <li>
                    <a href="admin.php?word=text">Shortcuts</a>
                </li>
                <li>
                    <a href="admin.php?word=insert">Einfuegen</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Admin Panel</h1>
                        <a href="#menu-toggle" id="menu-toggle"><input type="button" class="btn btn-warning btn-large" value="Toggle menu"></a>
                    </div>
                    <div class="col-xs-12">
                        <?php
                        if(isset($_GET['word']))
                        {
                            switch($_GET['word'])
                            {
                                case "products": include("products.php");
                                    break;
                                case "text": include("text.php");
                                    break;
                                case "insert": include("insert.php");
                                    break;
                                case "edit": include("edit.php");
                                    break;
                                case "delete": include("delete.php");
                                    break;
                                default:
                                    break;
                            }
                        }

                         ?>
                    </div>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
