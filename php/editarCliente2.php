<?php
include "conexion.php";
$consulta = "SELECT * FROM cliente WHERE id='".$_POST['oculto3']."'";
$resultado=mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if ($filas==0){
    echo '<SCRIPT language="JavaScript">
    alert("NO SE PUEDE EDITAR LOS DATOS ");
    window.location="../index.html";
    </script>';
}
if ($filas>0) {
    $consulta = "UPDATE cliente SET nombre='".$_POST['nombre3']."',direccion='".$_POST['direccion3']."',telefono='".$_POST['telefono3']."' WHERE id='".$_POST['oculto3']."'";
    $resultado=mysqli_query($conexion,$consulta);
    header ('Location: ../Clientes.php');
}
?>