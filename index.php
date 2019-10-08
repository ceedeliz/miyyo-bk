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
	<?php
        
         if (isset($_GET['status'])) {
            $status=$_GET['status'];
             if($status == "send"){
                 echo ("<script>  alert('Tu evento ha sido agendado, recibirás un mail del adminisitrador') </script>");
                 
             }

        }    
    ?>
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.php"> miyyo</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/header.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Bienvenido</h2>
				   					<h1>¿QUÉ NECESITAS?</h1>
										<p><a class="btn btn-agendar">Agendar evento</a></p>
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
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>¿Quiénes somos?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-heart"></i></span>
							<div class="desc">
								<h3>Almacen de los mejores artículos</h3>
								<p>Alquiladora de productos de decoración para eventos con luz LED  </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-headphones"></i></span>
							<div class="desc">
								<h3>Los mejores eventos</h3>
								<p> Nunc hendrerit dapibus diam sit amet sodales. Praesent at auctor lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-checkmark"></i></span>
							<div class="desc">
								<h3>La mejor calidad</h3>
								<p> Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque tempor magna sit amet sollicitudin porta. Proin auctor nunc quis ullamcorper molestie. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>Productos</h2>
					</div>
				</div>
				<div class="row">
                <?php
                    $sql="SELECT *, p.nombre as producto_nombre, cat.nombre as categoria_nombre
                            FROM productos as p
                            INNER JOIN categorias as cat ON p.id_Categoria=cat.id_Categoria limit 6;";

                    //ejecutamos el query y obtenemos el recordset
                    $rs=ejecutar($sql);
                    $filas = mysqli_num_rows($rs);
                    $columnas=mysqli_num_fields($rs);
                    //echo "El recordset obtenido tiene ".$filas." filas y ".$columnas." columnas";
                    while($datos=mysqli_fetch_array($rs)){ ?>
					<div class="col-md-6 animate-box text-center">
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
			</div>
		</div>
    <!--    
		<div id="colorlib-blog">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>Novedades</h2>
					</div>
				</div>
				<div class="row">
					<div class="blog-flex">
						<a href="#" class="one-forth blog-img animate-box" style="background-image: url(images/blog-1.jpg);">
						</a>
						<div class="three-forth">
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="f-blog animate-box">
										<p class="meta"><span>autor:</span> | <span>26 January 2017</span></p>
										<h3>Fusce vel aliquet orci, eu eleifend ante. </h3>
										<p class="read-more">Ver más <i class="icon-arrow-right3"></i></p>
									</a>
									<a href="#" class="f-blog animate-box">
										<p class="meta"><span>autor:</span> | <span>26 January 2017</span></p>
										<h3>Aliquam finibus congue placerat. Proin feugiat aliquet volutpat.</h3>
										<p class="read-more">Ver más <i class="icon-arrow-right3"></i></p>
									</a>
								</div>
								<div class="col-md-6">
									<a href="#" class="f-blog animate-box">
										<p class="meta"><span>autor:</span> | <span>26 January 2017</span></p>
										<h3> Nam fringilla eleifend egestas. Integer pellentesque fringilla bibendum. </h3>
										<p class="read-more">Ver más <i class="icon-arrow-right3"></i></p>
									</a>
									<a href="#" class="f-blog animate-box">
										<p class="meta"><span>autor:</span> | <span>26 January 2017</span></p>
										<h3>Vivamus eu enim et risus vulputate aliquam. Donec accumsan nisl sit amet placerat tincidunt. </h3>
										<p class="read-more">Ver más <i class="icon-arrow-right3"></i></p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
-->
		<div id="colorlib-counter" class="colorlib-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>Estadísticas</h2>
						<p>Fusce dui diam, ultricies ut tincidunt et, posuere non nisl. Nulla vitae felis nisi. Sed ultrices fringilla dictum. Sed feugiat eros est, a ullamcorper est placerat a. Sed tempor sit amet felis ut aliquet. </p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-4 text-center">
								<span class="colorlib-counter js-counter" data-from="0" data-to="456" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Eventos</span>
							</div>
							<div class="col-md-4 text-center">
								<span class="colorlib-counter js-counter" data-from="0" data-to="899" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Clientes satisfechos</span>
							</div>
							<div class="col-md-4 text-center">
								<span class="colorlib-counter js-counter" data-from="0" data-to="2000" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Productos en stock</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--
		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>Our Client Says:</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row animate-box">
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide text-center active">
										<figure>
											<img src="images/person1.jpg" alt="user">
										</figure>
										<blockquote>
											<p><i class="icon-quotes-left"></i> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											<span>Andrew Field, Blogger</span>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide text-center active">
										<figure>
											<img src="images/person2.jpg" alt="user">
										</figure>
										<blockquote>
											<p><i class="icon-quotes-left"></i> Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											<span>Mark Bubble, Web Designer</span>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide text-center active">
										<figure>
											<img src="images/person3.jpg" alt="user">
										</figure>
										<blockquote>
											<p><i class="icon-quotes-left"></i> Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											<span>Adam Smith, Guest</span>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
-->
		<div id="colorlib-hire">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box">
						<h2 class="heading">¿Te gustaría agendar un evento?</h2>
						<p><a href="#" class="btn btn-agendar">Agendar evento</a></p>
					</div>
				</div>
			</div>
		</div>

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

	</body>
</html>

