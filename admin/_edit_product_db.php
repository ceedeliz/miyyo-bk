<?php 
ini_set('display_errors',1);

include ("../conexion.php");

session_start();

$nombre           = isset($_POST['nombre']) ? $_POST['nombre'] : 0;
$descripcion       = isset($_POST['descripcion'])          ? $_POST['descripcion']: '';
$cantidad       = isset($_POST['cantidad'])          ? $_POST['cantidad']: '';
$medidas       = isset($_POST['medidas'])          ? $_POST['medidas']: '';
$id         = isset($_POST['id'])  ? $_POST['id']            : '';
$categoria = isset($_POST['categoria'])    ? $_POST['categoria']    : '';
$date = date('Y-m-d H:i:s');



if ($_FILES['img1']['error'] > 0) {
		$nom_arch1 = 'default.png';
		//echo "error	". $_FILES ['img1']['error']."<br/>";
	} else {
		$nom_temp=$_FILES['img1']['tmp_name'];
		$timestamp = time();
		$nom_arch1=$_FILES['img1']['name'];
		$info_arch = pathinfo($nom_arch1);
		$nom_arch1 = basename($nom_arch1, '.'.$info_arch['extension']);
		$nom_arch1 .= $timestamp . '.' . $info_arch['extension'];
		if($_FILES['img1']['size'] < 4000000) { 
			$movido = move_uploaded_file($nom_temp, "../images/".$nom_arch1);
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



if ($_FILES['img2']['error'] > 0) {
		$nom_arch2 = 'default.png';
		//echo "error	". $_FILES ['img2']['error']."<br/>";
	} else {
		$nom_temp=$_FILES['img2']['tmp_name'];
		$timestamp = time();
		$nom_arch2=$_FILES['img2']['name'];
		$info_arch = pathinfo($nom_arch2);
		$nom_arch2 = basename($nom_arch2, '.'.$info_arch['extension']);
		$nom_arch2 .= $timestamp . '.' . $info_arch['extension'];
		if($_FILES['img2']['size'] < 4000000) { 
			$movido = move_uploaded_file($nom_temp, "../images/".$nom_arch2);
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

if ($_FILES['img3']['error'] > 0) {
		$nom_arch3 = 'default.png';
		//echo "error	". $_FILES ['img3']['error']."<br/>";
	} else {
		$nom_temp=$_FILES['img3']['tmp_name'];
		$timestamp = time();
		$nom_arch3=$_FILES['img3']['name'];
		$info_arch = pathinfo($nom_arch3);
		$nom_arch3 = basename($nom_arch3, '.'.$info_arch['extension']);
		$nom_arch3 .= $timestamp . '.' . $info_arch['extension'];
		if($_FILES['img3']['size'] < 4000000) { 
			$movido = move_uploaded_file($nom_temp, "../images/".$nom_arch3);
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


$q="update productos set " 
            ."nombre='$nombre', "
			."descripcion='$descripcion', "    
			."cantidad='$cantidad', "    
			."medidas='$medidas', "    
			."id_Categoria='$categoria' ";
	if ($nom_arch1 != "default.png") {
		$q.=", img1= '$nom_arch1' ";
	}
	if ($nom_arch2 != "default.png") {
		$q.=", img2= '$nom_arch2' ";
	}
	if ($nom_arch3 != "default.png") {
		$q.=", img3= '$nom_arch3' ";
	}
        $q.= " where id_producto = $id";
echo $q;
$rs=ejecutar($q);
 //header('Location:exito.php');

?> 
<script>
 parent.parent.location.reload();
</script>
