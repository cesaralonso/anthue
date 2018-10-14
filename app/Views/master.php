<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      <title><?=$this->e($title)?></title>

    <!-- Styles -->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="assets/css/style.css"/>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="">

  <body>
    <!-- Begin Hero Bg -->
    <div id="parallax">
    </div>
    <!-- End Hero Bg
      ================================================== -->
    <!-- Start Header
      ================================================== -->
    <header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">Antonio  <span class="lighter">Huerta Navarro</span></a>
        </div>
        <!-- Start Navigation -->
        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">HOME</a>
          </li>
          <li>
            <a href="gallery">GALLERY</a>
          </li>
          <li>
            <a href="services">SERVICES</a>
          </li>
          <li>
            <a href="discography">DISCOGRAPHY</a>
          </li>
          <li>
            <a href="about">ABOUT ME</a>
          </li>
          <li>
            <a href="reviews">REVIEWS</a>
          </li>
          <li>
            <a href="videos">VIDEOS</a>
          </li>
          <li>
            <a href="">CONTACT</a>
          </li>
          <li>
            <a href="courses">COURSES</a>
          </li>
          <!-- <li>
            <a href="#hero">INGLES</a>
          </li> -->
        </ul>
        </nav>
      </div>
    </header>

    <!-- Intro
      ================================================== -->
    <section id="hero" class="section <?=(!$this->e($main)) ? 'sub-section' : ''?>">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="herotext">
              <h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s"><?=$this->e($title)?><!--Suites <span class="lighter">Atlas</span>--></h1>
              <p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
                <?=$this->e($description)?>
              </p>
            </div>
          </div>
          <div class="col-md-7">
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
              <?php if ($this->e($main)) { ?>
              <p class="navbar herobuttons">
                <a href="#gallery" class="btn btn-default btn-lg wow fadeInLeft " role="button"> Ver Discografía </a> &nbsp; <a href="#testimonials" class="btn btn-default btn-lg wow fadeInTop " role="button"> Testimonios </a> &nbsp; <a href="#contactarea" class="btn btn-default btn-lg wow fadeInRight" role="button">Contáctame</a>
              </p>
              <?php } ?>
          </div>
        </div>

      </div>
    </section>

    <?= $this->section('content') ?>

    <!-- Credits
    =============================================== -->
    <section id="credits" class="text-center">

      <p>Antonio Huerta Navarro el niño </p>
      <p>Juan Díaz Cavarrubias #319, <br>
      Colonia San Juan de Dios, Código postal 44360 <br>
      Guadalajara, Jalisco, México.</p>
      <p>Tel: <strong>044 33 11 61 63 47</strong></p>
      <p >Email: <strong style="text-transform: lowercase;">pianonha@gmail.com</strong></p>

      <br>
      <span class="social wow zoomIn">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-skype"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-pinterest"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      </span><br/>

      Copyright &copy; <a href="#">ANTONIO HUERTA</a>

      <span class="navbar">
        <a id="myBtn" title="Go to top" href="#hero"><i class="fa fa-arrow-up"></i></a>
      </span>

    </section>
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.localScroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/common.js"></script>
  </body>

</html>
