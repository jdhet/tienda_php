<?php
include "conexion.php";
if($_POST['usuario'] and $_POST['password'] )
{
	$clave=md5($_POST['password']);
	$sql = "SELECT * FROM usuario  WHERE usuario='{$_POST['usuario']}' AND contrasena = '{$clave}'";
	$q = mysqli_query($conexion,$sql);
	$registro=mysqli_fetch_array($q);
	$filas = mysqli_num_rows($q);
    
    
	if($filas>=1 && $resgistro['id_tipo_usuario']==2){
		echo '<SCRIPT language="JavaScript">
        window.location="../panel_administrador.php";
        </script>';
	}
    elseif ($fila>=1 && $registro['id_tipo_usuario']==1){
        echo '<SCRIPT language="JavaScript">
        window.location="../pago.php";
        </script>';
    }
    else{
		echo "no se encontro registro";
        	}
}
?>