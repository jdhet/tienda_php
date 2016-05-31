<?php
session_start();
function agregarCarro($id_producto,$cantidad) {
    $_SESSION['id'][$_SESSION['contador']] = $id_producto;
    $_SESSION['cantidad'][$_SESSION['contador']] = $cantidad;
    $_SESSION['contador']++;
    echo "Exito";
}
agregarCarro($_POST['id_producto'],$_POST['cantidad']);
?>