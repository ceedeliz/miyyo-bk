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
	<link rel="stylesheet" href="css/calendar.css" media="screen">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
    
        #wrapper{
            padding: 50px 0 0 325px;}#calendar{margin:25px auto; width: 370px;
        }
    
        #calendar{
            width: 90%;
        }
        .ui-datepicker{
            width: 100%;
        }
        table.ui-datepicker-calendar{
            width: 100%;
        }
        tbody{
            text-align: center;
        }
        .ui-datepicker-calendar .ui-state-default{
            margin: 0 auto;
        }
        td.block span{
            background: #6700ff;
            border-radius: 250px;
        }
        div#colorlib-contact{
            padding: 1em 0;
        }
        .ui-datepicker-calendar td{
            height: 50px;
            font-size: 2em;
        }
        .ui-datepicker-calendar .ui-state-default{
            width: 36px;
        }
        .center{
width: 150px;
  margin: 40px auto;
  
}
        .cantidades input{
            height: auto;
        }
        .cantidades span{
            color: white;
            margin-bottom: 8px;
        }
        .q-producto{
            text-align: center;
            margin: 10px 0;
        }
        .work-img{
            height: 200px;
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}
@media screen and (max-width: 460px) {
    body{
        background: red;
    }
    span{
        font-size: 11px;
    }
    .ui-datepicker-calendar .ui-state-default{
        width: 30px;
    }
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
							<a class="colorlib-logo" href="index.php">miyyo</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/contact.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Contacto</h2>
				   					<h1>Agendar evento</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
                        <div class="row">
					       <div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
                               <h2>Contacto</h2>
					   </div>
				    </div>
						<div class="row">
							<div class="col-md-4 animate-box">
								<h2>Dirección</h2>
								<ul class="contact-info">
									<li><i class="icon-map5"></i>88 West 21th Street, Suite 721 New York NY 10016</li>
									<li><i class="icon-phone4"></i>+ 1235 2355 98</li>
									<li><i class="icon-envelope2"></i><a href="#">info@miyyo.com</a></li>
									<li><i class="icon-globe3"></i><a href="#">www.miyyo.com</a></li>
								</ul>
							</div>
					</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-hire" class="">
			<div class="container">
                
                 <div class="row">
                     <form method="post" action="_add_eventodb.php" enctype="multipart/form-data"> 
				    <div class="col-md-12 text-center animate-box intro-heading">
                               <h2>Agenda tu evento</h2>
				</div>
				<div class="row">
    			<div class="col-md-12 animate-box">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email" name="email" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="mensaje" class="form-control" id="" cols="30" rows="7" placeholder="Mensaje" required></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										</div>
									</div>
								</div>
							</div>
                    <div class="col-md-12 animate-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group cantidades">
                                        

                                                        
                    <?php
                    $sql="SELECT *, p.nombre as producto_nombre, cat.nombre as categoria_nombre
                            FROM productos as p
                            INNER JOIN categorias as cat ON p.id_Categoria=cat.id_Categoria";

                    //ejecutamos el query y obtenemos el recordset
                    $rs=ejecutar($sql);
                    $filas = mysqli_num_rows($rs);
                    $columnas=mysqli_num_fields($rs);
                    //echo "El recordset obtenido tiene ".$filas." filas y ".$columnas." columnas";
                    ?>
                    <input type="hidden" name="productos" value="<?php echo $filas ?>">                    
                    <?php
                    while($datos=mysqli_fetch_array($rs)){ ?>
					<div class="col-md-3 animate-box text-center">
                        <label><?php echo $datos["producto_nombre"]?></label>
                        <input type="number" name="<?php echo "q_producto".$datos['id_producto']?>" class="q-producto" placeholder="Cantidad" value="<?php echo intval($datos['cantidad'])?>" onkeyup="this.value = minmax(this.value, 0, <?php echo $datos['cantidad']?>)"> 
						<a href="producto.php?id_producto=<?php echo $datos["id_producto"]?>" class="work-img" style="background-image: url(images/<?php echo $datos['img1']?>);">

						</a>
					</div>
                    <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
	
					<div class="col-md-8 col-md-pull-1 animate-box"><div id="calendar"></div>
					</div>
					<div class="col-md-4 col-md-pull-1 animate-box">
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam sagittis suscipit ultricies. Suspendisse congue ac nunc et luctus. Quisque nec nunc vitae mauris volutpat tincidunt. Ut maximus rutrum congue. Donec et convallis leo, sagittis placerat nisi. Etiam rutrum, justo ac bibendum tempus, velit mi lacinia tellus, ac vehicula odio nisi eu mi. </p>
                        <input type="hidden" value="" name="fechas_registro" id="fechas_registro">
						<input type="submit" class="btn btn-agendar" value="Agendar evento">

					</div>
				</div>
            </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	<!-- jQuery Easing -->
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
        
    <script src="js/jquery-ui-datepicker.min.js"></script>
    <script>
        var eventDates = [];
    
    </script>
                <?php
                    $sql_date="SELECT * from eventos";
                    //ejecutamos el query y obtenemos el recordset
                    $rs_date=ejecutar($sql_date);
                    //echo "El recordset obtenido tiene ".$filas." filas y ".$columnas." columnas";
        
                    echo ("<script> ");
                     while($datos=mysqli_fetch_array($rs_date)){
                            $fecha = $datos["fechas"];
                            $fecha_temp = explode(",", $fecha);
                         echo("console.log('$fecha_temp[0]'); ");
                         for($i=0;$i<count($fecha_temp);$i++) 
                         {  
                             echo("eventDates.push('$fecha_temp[$i]'); ");
                         }
                     }
                    echo ("</script>");

                    ?>

        
<script>
//    var eventDates = ["2018-12-13","2018-12-15","2018-12-16"]
    $("#fechas_registro").val(eventDates);
console.log(eventDates);
    load_script();
function load_script() {

$('#calendar').datepicker({
	inline: true,
	firstDay: 1,
	showOtherMonths: true,
    // The hidden field to receive the date
    altField: "#dateHidden",
    // The format you want
    altFormat: "yy-mm-dd",
    // The format the user actually sees
    //dateFormat: "dd/mm/yy",
    dateFormat: "yy-mm-dd",
    beforeShowDay: function(date){
    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
      var highlight = eventDates.indexOf(string) > -1;
        if (highlight) {
             return [false, "block", highlight];
            
        } else {
             return [true, 'able', ''];
   
        }
    },
    onSelect: function (date) {
    // Your CSS changes, just in case you still need them
        console.log(eventDates);
        if(confirm("¿Deseas agendar este día?")){
            console.log(date);
            eventDates.push(date);
            $("#fechas_registro").val(eventDates);
            console.log(eventDates);

        }
    
            
    },
    dayNamesMin: ['Dom', 'Lun', 'Mar', 'Miér', 'Jue', 'vier', 'Sab']  
});
}
	
</script>
       <script>
        
        $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
        
        </script>
        
        <script type="text/javascript">
function minmax(value, min, max) 
{ 
    if(parseInt(value) < min || isNaN(parseInt(value))) 
        return min; 
    else if(parseInt(value) > max) 
        return max; 
    else return value;
}
</script>
        </div>
	</body>
</html>

