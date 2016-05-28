<?php
function llamar($tipo,$id_registro,$tabla) {
    $conexion=mysqli_connect("localhost","root","root","tienda_ok");
    $fecha = date('Y-m-d H:i:s');
    $consulta = "INSERT INTO bitacora VALUES (NULL,$tipo,$id_registro,'".$tabla."','".$fecha."')";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}
?>