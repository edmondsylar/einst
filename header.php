<?php
session_start();
	  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
  }
		include_once 'backend/config.php';
		include_once 'actions/style.php';
		$db = new Config();
 ?>
<!DOCTYPE html>
<html>
<head>
		<title>Einstein Rising</title>

		
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery.fancybox.css">
		<link rel="stylesheet" href="js/layerslider/css/layerslider.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="tuner/css/styles.css">
		<link rel="stylesheet" href="tuner/css/colorpicker.css">
	</head>

	<body>
		<div class="page">

			<!-- page header bottom -->
			<header id="page-header-bottom" class="page-header-bottom">
				<div class="grid-row">
					<!-- logo -->
					<a href="index.php" class="logo">
						<img src="img/er-logo.png" alt="">
					</a>
					<!--/ logo -->

					<!-- main nav -->
					<nav class="main-nav">
						<ul>
  							<li>
  								<a href="potifolio.php">Home</a>
							</li>
  							<?php if($_SESSION['role'] == 'admin'): ?>
								<li>
									<a href="register.php" class="">Entreprenuers</a>
								</li>
							<?php endif; ?>

							<!-- <li>
								<a href="single.php">Bussines</a>
							</li> -->
							<!-- <li>
								<a href="http://localhost/kawa/login/index.php">Training</a>
							</li> -->

							<?php if ($_SESSION["loggedin"]): ?>
								<li>
									<a href="backend/logout.php">logout</a>
								</li>
							<?php endif; ?>
						</ul>
					</nav>
					<nav id="mobile-nav" class="mobile-nav">
						<a href="#mobile-nav-1" class="switcher"><i class="fa fa-align-justify"></i></a>
						<ul id="mobile-nav-1">
							<li><a href="#mobile-nav-7" class="opener"><i class="fa fa-angle-right"></i>Home</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
