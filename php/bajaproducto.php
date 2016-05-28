<?php
include "conexion.php";
$consulta="DELETE FROM articulo WHERE id=".$_GET['id']."";
$resultado=mysqli_query($conexion,$consulta);
mysqli_close($conexion);
header ('Location: ../productos.php');
?>