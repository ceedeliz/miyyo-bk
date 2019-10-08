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
        <style>
            .slides li{
                height: 500px;
                background-size: 100%;

            }
            .mt-1{
                margin-top: 40px;
            }
        </style>
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
<?php

            if (isset($_GET['id_producto'])) {
            $post=$_GET['id_producto'];
            $q="SELECT *, p.descripcion as producto_descripcion, p.nombre as producto_nombre, cat.nombre as categoria_nombre
                            FROM productos as p
                            INNER JOIN categorias as cat where id_producto=$post";
            $res=ejecutar($q);
            $datos = mysqli_fetch_array($res);
        }
?>
        <div id="colorlib-services">
			<div class="container">
				<div class="row">
                    <div class="col-md-8">
							
			<div class="flexslider_product">
				<ul class="slides">
                <?php 
                $img1 = $datos["img1"];
                $img2 = $datos["img2"];
                $img3 = $datos["img3"];
                
                if ($img1 != "") { ?>
			   	<li style="background: url(images/<?php echo $datos["img1"]?>) center top no-repeat;"></li>
                <?php } if (($img2 != "")) {  ?>
                <li style="background: url(images/<?php echo $datos["img2"]?>) center top no-repeat;"></li>
                <?php } if ($img3 != "") { ?>
			   	<li style="background: url(images/<?php echo $datos["img3"]?>) center top no-repeat;"></li>
                <?php   }  ?>
                 </ul>
		  	</div>

					</div>

					<div class="col-md-4 text-center animate-box intro-heading fadeInUp animated">
						<h2>Producto: <?php echo $datos["producto_nombre"]?></h2>
						<h3>Dimensiones: <?php echo $datos["medidas"]?></h3>
						<h4>Cantidad Disponible: <?php echo $datos["cantidad"]?></h4>
    					<p class="tag"><span><?php echo $datos["producto_nombre"]?></span>, <span><?php echo $datos["categoria_nombre"]?></span></p>
					</div>
                    
            <div class="col-md-12 mt-1 animate-box intro-heading fadeInUp animated">
                <p><?php echo $datos["producto_descripcion"]?></p>
				</div>

			</div>
		</div>
			<div class="row">
        </div>

<?php echo $datos["id_producto"]?>
		<footer>
		<div id="footer">
				<div class="container">
					<div class="row">
                        <p>Ana Banana</p>
                    </div>
				</div>
			</div>
	
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
<script>
$(window).load(function() {
  $('.flexslider_product').flexslider({
    animation: "slide"
  });
});
</script>
	</body>
</html>

