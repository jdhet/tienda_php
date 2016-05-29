<?php
include "../conexion.php";
include "../bitacora.php";
$consulta = "INSERT INTO articulo VALUES (NULL,'".$_POST['descripcion']."','".$_POST['cantidad']."','".$_POST['modelo']."','aqivaunaimagen','".$_POST['precio']."','".$_POST['marca']."','".$_POST['tipo_articulo']."')";
$resultado = mysqli_query($conexion,$consulta);

$consulta2="SELECT * FROM articulo ORDER BY id DESC LIMIT 1";

$resultado2= mysqli_query($conexion,$consulta2);

$fila = mysqli_fetch_array($resultado2);
insertarBitacora(1,$fila['id'],'articulo');

//echo '<SCRIPT language="JavaScript">
//    alert("DATOS GUARDADOS CORRECTAMENTE");
//    window.location="../../alta_producto.php";
//    </script>';
?>


