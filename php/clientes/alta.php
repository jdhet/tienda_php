<?php
include "../conexion.php";
$consulta = "select * from usuario where usuario='" . $_POST['usuario'] . "'";
$r = mysqli_query($conexion, $consulta);
$numero_filas = mysqli_num_rows($r);
if ($numero_filas > 0) {
    echo '<SCRIPT language="JavaScript">
    alert("EL NOMBRE DE USUARIO YA EXISTE");
    window.location="../../alta.php";
    </script>';

} else {
    $contrasena = md5($contrasena);
    $consulta = "INSERT INTO usuario VALUES (NULL ,'" . $_POST['usuario'] . "','" . $contrasena . "',2)";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        $consulta = "select * from usuario where usuario='" . $_POST['usuario'] . "'";
        $r = mysqli_query($conexion, $consulta);
        $numero_filas = mysqli_num_rows($r);
        if ($numero_filas > 0) {
            $fila = mysqli_fetch_array($r);
            $consulta = "INSERT INTO clientes VALUES (NULL,'" . $_POST['nombre'] . "','" . $_POST['apellido_p'] . "','" . $_POST['apellido_m'] . "','" . $_POST['direccion'] . "','" . $_POST['correo'] . "','" . $_POST['telefono'] . "','" . $_POST['rfc'] . "','" . $fila['id'] . "')";
            $resultado = mysqli_query($conexion, $consulta);
        }
        if ($resultado == true) {
            echo '<SCRIPT language="JavaScript">
    alert("CLIENTE GUARDADO CORRECTAMENTE");
    window.location="../../alta.php";
    </script>';
        } else {
            echo "no se guardo el cliente";
        }
    } else {
        echo "no se guardo el usuario";
    }
}
?>