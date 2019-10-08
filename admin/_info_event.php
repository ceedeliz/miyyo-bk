<?php
include ("../conexion.php");
ini_set('display_errors', '1');

session_start();

if(!isset($_SESSION['email'])){
header("HTTP/1.1 401 Unauthorized");
   ?>
<h1>Acceso no autorizado</h1>
<?php

    exit;

}
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Añadir reseña</title>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    

    
<style>
body{
    font-family: arial;
	background:#f2f2f2;
	}

form{
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    margin: 0 auto;
    justify-content: center;
    background:#F5F5F4;

}
    input{
        width: 50%;
        height: 35px;
    }
    label{
        width: 100%;
        text-align: center;
        height: 10px;
        margin: 10px 0
    }
    #boton{
    margin: 30px 10%;
    height: 40px;
    width: 80px;
    border: none;
    background: gray;
    color: white;
    }

#conedor {
    width: 300px;
    background-color:#FFF;
    display: flex;
    flex-wrap: wrap;
}
h1 {
position: initial;
color: #333;
width: 100%;
text-align: center;
margin-bottom: 17px;
font-size: 1.25em;
margin-top: 15px;
}
    .column, .miniatura{
        background: white;
    }
    .column{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

    }
    
    .column input, .column label {
        float: left;
        width: 80%;
    }
    textarea{
        min-width: 80%;
        max-width: 80%;
        height: 700px;
    }
    .miniatura{
        width: 10%;

        padding: 0 10px;
    }
    .miniatura label{
        display: flex;
        margin: 10px 0;
        flex-wrap: wrap;
    }
    .miniatura input{
        width: 100%;
        margin: 10px 0;
    }
    .format-text {
        width: 90%;
    }
    
    .select {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        height: 60px;
        margin-top: 10px;
    }
    figure img{
        width: 150px;
    }
    h2,h3{
        width: 100%;
        text-align: center;
    }
    h1{
    color: white;
    }
    .c-gray{
        background: #3a3a3a;
        padding: 10px;
        width: 100%;
        color: white;
    }
    .c-opaque{
        background: #f1f1f1;
        margin: 10px;
    }
</style>
<script type="text/javascript">
function control(f){
    var ext=['gif','jpg','jpeg','png'];
    var v=f.value.split('.').pop().toLowerCase();
    for(var i=0,n;n=ext[i];i++){
        if(n.toLowerCase()==v)
            return
    }
    var t=f.cloneNode(true);
    t.value='';
    f.parentNode.replaceChild(t,f);
    alert('extensión no válida');
}
</script>
</head>

<body>
<div  id="contenedor">
<?php 
if(isset($_GET['id'])) {
 $id=($_GET['id']);
}
$q = "SELECT * FROM eventos as ev INNER JOIN registros as reg ON ev.id_evento=reg.id_evento where reg.id_evento=$id";
$res=ejecutar($q);
$datos=mysqli_fetch_array($res)
?>
 
<div class="column">
        <div class="c-gray">
<h1>Información del evento:</h1>
    </div>

        <h2>Cliente: <?php echo  $datos["cliente"] ?></h2>
        <h3>Información del evento: <?php echo  $datos["mensaje"] ?></h3>
        <h3>Nombre del evento: <?php echo  $datos["info"] ?></h3>
                        <?php
                    $sql="SELECT * FROM productos as p INNER JOIN registros as reg ON p.id_producto=reg.id_producto where id_evento=$id";

                    //ejecutamos el query y obtenemos el recordset
                    $rs=ejecutar($sql);
                    $filas = mysqli_num_rows($rs);
                    $columnas=mysqli_num_fields($rs);
                    //echo "El recordset obtenido tiene ".$filas." filas y ".$columnas." columnas";
                    ?>
                    <?php
                    while($datos=mysqli_fetch_array($rs)){ ?>
					<div class="col-md-3 animate-box text-center c-opaque">
                        <h3><?php echo $datos["nombre"]?></h3>
                        <h3>Cantidad: <?php echo $datos['cantidad_producto'] ?></h3> 
                        <figure><img src="../images/<?php echo $datos['img1'] ?>" > </figure>
					</div>
                    <?php } ?>
    </div>
    </div>
</body>
</html>