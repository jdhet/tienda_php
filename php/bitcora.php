<?php
function llamar() {
    include "conexion.php";
    $consulta = "INSERT INTO bitacora VALUES (NULL,1,2,'alumnos','2016-05-25 12:00:00')";
    $resultado = mysqli_query($conexion, $consulta);
    echo $consulta;
    echo $resultado;
    if ($resultado){
        echo "Esto es un mensaje";
    }
    else {
        echo "Ha ocurrido un error al insertar";
    }
}
llamar();
?>