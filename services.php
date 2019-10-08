<?php
include ("conexion.php");
ini_set('display_errors', '1');
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>miyyo Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Quiénes somos</a></li>
					<li><a href="services.php">Productos</a></li>
					<li><a href="contact.php">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.php">Miyyo</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/services.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Galeria</h2>
				   					<h1>Productos</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
        <div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
						<h2>Productos</h2>
					</div>
				</div>

			</div>
		</div>
			<div class="row">
                
                    <?php
                    $sql="SELECT *, p.nombre as producto_nombre, cat.nombre as categoria_nombre
                            FROM productos as p
                            INNER JOIN categorias as cat ON p.id_Categoria=cat.id_Categoria";

                    //ejecutamos el query y obtenemos el recordset
                    $rs=ejecutar($sql);
                    $filas = mysqli_num_rows($rs);
                    $columnas=mysqli_num_fields($rs);
                    //echo "El recordset obtenido tiene ".$filas." filas y ".$columnas." columnas";
                    while($datos=mysqli_fetch_array($rs)){ ?>
					<div class="col-md-3 animate-box text-center">
						<a href="producto.php?id_producto=<?php echo $datos["id_producto"]?>" class="work-img" style="background-image: url(images/<?php echo $datos['img1']?>);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<p class="tag"><span><?php echo $datos["producto_nombre"]?></span>, <span><?php echo $datos["categoria_nombre"]?></span></p>
								<h3><?php echo $datos["producto_nombre"]?></h3>
                                     <span class="read-more">Ver más <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
                    <?php } ?>

                
				</div>

		<footer>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

