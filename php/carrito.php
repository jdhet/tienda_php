<?php
session_start();
function agregarCarro($id_producto,$cantidad) {
    $_SESSION['id'][$_SESSION['contador']] = $id_producto;
    $_SESSION['cantidad'][$_SESSION['contador']] = $cantidad;
    $_SESSION['contador']++;
    echo "Exito";
}
agregarCarro($_POST['id_producto'],$_POST['cantidad']);

function limpiarCarro() {
    for ($c=0;$c<=$_SESSION['contador'];$c++) {
        $_SESSION['id'][$c] = '';
        $_SESSION['cantidad'][$c] = '';
    }
}
?>