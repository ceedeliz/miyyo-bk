
<?php
session_start();

include "../conexion.php";

$nombre   = $_POST['nombre'];
$descripcion   = $_POST['descripcion'];
$categoria        = $_POST['categoria'];
$medidas    = $_POST['medidas'];
$cantidad    = $_POST['cantidad'];

$date = date('Y-m-d H:i:s');


if ($_FILES['file']['error'] > 0) {
		$nom_arch = 'default.png';
		//echo "error	". $_FILES ['file']['error']."<br/>";
	} else {
		$nom_temp=$_FILES['file']['tmp_name'];
		$timestamp = time();
		$nom_arch=$_FILES['file']['name'];
		$info_arch = pathinfo($nom_arch);
		$nom_arch = basename($nom_arch, '.'.$info_arch['extension']);
		$nom_arch .= $timestamp . '.' . $info_arch['extension'];
		if($_FILES['file']['size'] < 4000000) { 
			$movido = move_uploaded_file($nom_temp, "../images/".$nom_arch);
		}else{
			$movido=false;
			header('Location: adnot.php?error=2');
		}
		if ($movido) {
			$mensaje = "imagen cargada con exito";
		} else {
			$mensaje = "imagen NO cargada";
		} // if movido
	}


	$q="INSERT INTO productos SET "
			."nombre='$nombre', "
			."descripcion='$descripcion', "
			."id_Categoria='$categoria', "
			."medidas='$medidas', "
			."cantidad='$cantidad', "
			."updated_at='$date'";

	if ($nom_arch != "") {
		$q.=", img1= '$nom_arch'";
	}
	echo $q;
	$rs = ejecutar($q);
	?>
<script>
 parent.parent.location.reload();
</script>
