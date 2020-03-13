<!DOCTYPE html>
<html>
<head>
	<title>Tomás Noticias</title>	

	<link rel="shortcut icon" href="<?php echo URL ?>/public/ftco-32x32.png">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo URL ?>/public/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/aos.css">	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div class="site-wrap"> <!-- Inicio de site-wrap -->

	<!-- icon menu mobile -->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- HEADER -->
<?php
	// Buscar coincidencias para colocar clases dependiendo de la URL
	$url= $_SERVER["REQUEST_URI"];
	$parts = explode('/', $url);
	$last = end($parts);


	if ( ($last === 'login') || ($last === '') ) {
		echo '<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner"> ';
	}else{
		echo '<header class="site-navbar py-4 js-sticky-header site-navbar-target nav-tomas" role="banner"> ';
	}


?> 
      <div class="container-fluid">
	    <div class="d-flex align-items-center">
	      <div class="site-logo">
	        <a href="<?php echo URL ?>" class="">
	          <img class="usta" src="<?php echo URL ?>/public/images/logoUSTA.png" alt=""> | 
	          <img class="tomas" src="<?php echo URL ?>/public/images/logo.png" alt="">
	        </a>
	      </div>
	      <div>
	        <?php include 'view.nav.php'; ?>
	      </div>
	      <div class="ml-auto">
	      <nav class="site-navigation position-relative text-right" role="navigation">
	      <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
	      <li class="cta"><a href="https://www.usta.edu.co" target="_blank" class="nav-link"><span class="border bg-secondary rounded text-primary border-secondary">www.usta.edu.co</span></a></li>
	      </ul>
	      </nav>
	      <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
	      </div>
	    </div>
	  </div>
	</header>
	