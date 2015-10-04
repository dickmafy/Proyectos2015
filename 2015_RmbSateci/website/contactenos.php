<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>RMB SATECI</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img alt="" src="images/logo.png"></a>
					</div>
					<div class="navbar-collapse collapse">
                    	<a class="language" href="en/contact-us.php">English</a>
						<ul class="nav navbar-nav navbar-right">
							<li class="drop">
                            	<a href="inicio.php">Inicio</a>
							</li>
							<li><a href="nosotros.php">Nosotros</a></li>
							<li class="drop"><a>Productos</a>
								<ul class="drop-down">
									<li><a href="productos-clase.php">Por Clase</a></li>
									<li><a href="productos-industria.php">Por Industria</a></li>
									<li><a href="soluciones-integrales.php">Soluciones Integrales</a></li>
								</ul>
							</li>
							<li class="drop"><a href="post-venta.php">Post Venta <br />y Servicios</a>
							<li class="drop">
                            	<a>Noticias <br />y Novedades</a>
								<ul class="drop-down">
									<li><a href="noticias.php">Noticias</a></li>
									<li><a href="novedades.php">Novedades</a></li>
								</ul>                                
							</li>
							<li><a class="active" href="contactenos.php">Contáctenos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">

			<!-- Page Banner -->
			<div class="page-banner">
				<div class="container">
					<h2>Contáctenos</h2>
					<ul class="page-tree">
						<li><a href="inicio.php">Inicio</a></li>
						<li><a href="#">Contáctenos</a></li>
					</ul>				
				</div>
			</div>

			<!-- Map box -->
			<div class="map">
				
			</div>

			<!-- contact box -->
			<div class="contact-box">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="contact-information">
								<h3>Información de Contacto</h3>
								<ul class="contact-information-list">
									<li><span><i class="fa fa-home"></i><span style="float: right; display: inline-block;">Av. Nicolás Ayllón 2691<br />El Agustino Lima - Perú</span></span></li>
									<li><span><i class="fa fa-phone"></i>+51-01-7138400</span></li>
									<li><a href="mailto:ventas@rmbsateci.com.pe"><i class="fa fa-envelope"></i>ventas@rmbsateci.com.pe</a></li>
                                    <li><a href="mailto:postventa@rmbsateci.com.pe"><i class="fa fa-envelope"></i>postventa@rmbsateci.com.pe</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="contact-information">
								<h3>Únete a Nosotros</h3>
								<p>Forma parte de nuestro equipo de trabajo. Ponte en contacto con nosotros y mándanos tu CV para que nos comuniquemos contigo.</p>
                                <h3 class="no-border">Búscanos en:</h3>
								<ul class="social-icons" style="float: left; margin: 8px -5px 0 0; color: #000 !important;">
									<li><a class="facebook" href="https://www.facebook.com/rmbsateci" target="_blank"><i class="contactenos fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="https://twitter.com/RMBSATECI" target="_blank"><i class="contactenos fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="https://www.youtube.com/user/RMBSateci" target="_blank"><i class="contactenos fa fa-youtube"></i></a></li>
									<!--<li><a class="google" href="https://www.facebook.com/rmbsateci" target="_blank"><i class="contactenos fa fa-google-plus"></i></a></li>-->
								</ul>                                
							</div>
						</div>

						<div class="col-md-6">
							<h3>Escríbenos</h3>
							<form id="contact-form">

								<div class="text-input">
									<div class="float-input">
										<input name="name" id="name" type="text" placeholder="nombre">
										<span><i class="fa fa-user"></i></span>
									</div>

									<div class="float-input2">
										<input name="mail" id="mail" type="text" placeholder="email">
										<span><i class="fa fa-envelope"></i></span>
									</div>
								</div>

								<div class="textarea-input">
									<textarea name="comment" id="comment" placeholder="mensaje"></textarea>
									<span><i class="fa fa-comment"></i></span>
								</div>

								<div id="msg" class="message"></div>
								<input type="submit" id="submit_contact" value="ENVIAR MENSAJE">

							</form>
						</div>

					</div>
				</div>
			</div>

		</div>
		<!-- End content -->


		<!-- footer 
			================================================== -->
		<?php include ('footer.php'); ?>
		<!-- End footer -->

		<div class="fixed-link-top">
			<div class="container">
				<a class="go-top" href="#"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>

	</div>
	<!-- End Container -->

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>