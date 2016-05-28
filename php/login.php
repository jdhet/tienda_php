<?php
include "conexion.php";
if($_POST['usuario'] and $_POST['password'] )
{
	$clave=md5($_POST['password']);
	///echo $clave;
	$sql = "SELECT * FROM usuario  WHERE usuario='{$_POST['usuario']}' AND contrasena = '{$clave}'";
	//echo $sql;
	$q = mysqli_query($conexion,$sql);
	//print_r($q);
	$filas = mysqli_num_rows($q);
	if($filas>=1){
		echo '<SCRIPT language="JavaScript">
    window.location="../panel.php";
    </script>';
	}else{
		echo "no se encontro registro";
	}
}
?>