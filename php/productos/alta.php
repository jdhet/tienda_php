<?php
include "../conexion.php";

$consulta = "INSERT INTO articulo VALUES (NULL,'".$_POST['descripcion']."','".$_POST['cantidad']."','".$_POST['modelo']."','aqivaunaimagen','".$_POST['precio']."','".$_POST['marca']."','".$_POST['tipo_articulo']."')";
$resultado = mysqli_query($conexion,$consulta);
echo '<SCRIPT language="JavaScript">
    alert("DATOS GUARDADOS CORRECTAMENTE");
    window.location="../../alta_producto.php";
    </script>';
?>