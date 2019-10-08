
<?php

include "conexion.php";
if(isset($_GET['id_evento']) && isset($_GET['cadena']) && isset($_GET['stock'])) {

$cadena=($_GET['cadena']);
$stock=($_GET['stock']);
$id=($_GET['id_evento']);

$cadena_id=explode("s-s",$cadena);
$cadena_number= explode("n-n",$stock);
    
    for($i=1;$i<count($cadena_id);$i++) 
    { 
        $producto = str_replace("producto","",$cadena_id[$i]);
        $q_producto = str_replace("cantidad","",$cadena_number[$i]);
        $add_registro="INSERT INTO registros SET id_producto = $producto, id_evento = $id";
        echo ($add_registro);
        $rs = ejecutar($add_registro);
        $current_stock="Select cantidad from productos where id_producto = $producto";
        echo ($current_stock);
        $rs = ejecutar($current_stock);
        $datos=mysqli_fetch_array($rs);
        $nueva_cantidad = $datos["cantidad"]-$q_producto;    
        $update_stock="update productos set cantidad='$nueva_cantidad' where id_producto = $producto";
        $rs = ejecutar($update_stock);
        echo($add_registro."<br>");
        echo($update_stock."<br>");
    }     
    echo("<script>
    window.location = 'index.php?status=send'; 
    </script>");


}else{
    
$mensaje  = $_POST['mensaje'];
$fechas   = $_POST['fechas_registro'];
$date = date('Y-m-d H:i:s');
$productos = $_POST['productos'];

$cadena_productos ="";    
$cadena_cantidad ="";    
 $sql="SELECT *, p.nombre as producto_nombre, cat.nombre as categoria_nombre
        FROM productos as p
        INNER JOIN categorias as cat ON p.id_Categoria=cat.id_Categoria";

        $rs=ejecutar($sql);

     while($datos=mysqli_fetch_array($rs)){
        $cantidad  = $_POST['q_producto'.$datos['id_producto']];
        $cadena_productos.= "productos-s".$datos['id_producto'];
        $cadena_cantidad.= "cantidadn-n".$cantidad;
     
     }
	$add_evento="INSERT INTO eventos SET "
			."info='evento', "
			."created_at='$date', "
			."fechas='$fechas'";
    echo $add_evento;
$rs = ejecutar($add_evento);
$select_evento = "Select * from eventos order by created_at desc limit 1";
$rs_evento  = ejecutar($select_evento);
$datos_evento = mysqli_fetch_array($rs_evento);
$id_evento = $datos_evento['id_evento'];
    
echo $cadena_productos;
echo("<script>
    window.location = '_add_eventodb.php?id_evento=$id_evento&&cadena=$cadena_productos&&stock=$cadena_cantidad'; 
    </script>");
echo ("_add_eventodb.php?id_evento=".$id_evento."&&cadena=".$cadena_productos."&&stock=".$cadena_cantidad);
}