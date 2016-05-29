<?php
session_start();
function agregarCarro($id_producto,$cantidad) {
    $_SESSION['id'][$_SESSION['contador']] = $id_producto;
    $_SESSION['cantidad'][$_SESSION['contador']] = $cantidad;
    $_SESSION['contador']++;
}

function mostrarProductos () {
    for ($c=0;$c<$_SESSION['contador'];$c++) {
        echo $_SESSION['id'][$c]." ".$_SESSION['cantidad'][$c]."<br>";
    }
}
?>