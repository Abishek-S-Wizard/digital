<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ARIES</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">
            STELLER ART GALLERY
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php include ('menu.php') ?>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">MODERN ART</h1>
                    <p class="intro-text">
                        The New Age Art
                    </p>
                    <a href="#mart" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Project Details Section -->
<section id="mart">
    <div class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>ART FACTS</h2>
                <p>
                    What is Mordern Art?<a href="#"></a>
                </p>
                <p>
                Modern art refers to artistic works produced from the late 19th century to the mid-20th century, characterized by a departure from traditional styles and an embrace of innovation, experimentation, and abstraction. It encompasses various movements, including Impressionism, Cubism, Fauvism, Dadaism, and Surrealism, reflecting the rapid societal changes of the time, such as industrialization and urbanization. Influential artists like Vincent van Gogh, Pablo Picasso, Henri Matisse, and Salvador Dalí explored new perspectives and subjective experiences, often using their art to comment on contemporary issues. Ultimately, modern art redefined the boundaries of artistic expression and laid the groundwork for contemporary art movements, challenging viewers to engage with art in new and profound ways.
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="contacts.php#contact" class="btn btnghost btn-lg"><i class="fa fa-envelope"></i><span class="network-name">Request Specific Artifact</span></a>
                    </li>
                    <li>
                        <a href="index.php#portfolio" class="btn btnghost btn-lg"><i class="fa fa-camera"></i><span class="network-name">Back to gallery home page</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include('portfolio.php'); ?>

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>