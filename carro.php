<?php
session_start();
include "php/conexion.php";
if ($_SESSION['contador'] > 0) {
    ?>
    <?php
    for ($c = 0; $c < $_SESSION['contador']; $c++) {
        $consulta = "SELECT * FROM articulo WHERE id=".$_SESSION['id'][$c].";";
        $fila = mysqli_fetch_array(mysqli_query($conexion,$consulta));
        ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Descripcion</th>
                    <th>Cantidad a pedir</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Doe</td>
                    <td><?php echo $fila['descripcion']; ?></td>
                    <td><?php echo $_SESSION['cantidad'][$c]; ?></td>
                </tr>
                </tbody>
            </table>
        <?php
    }
} else {
    ?>
    <div class='alert alert-danger'>NO TIENE PRODUCTOS EN SU CARRO DE COMPRAS</div>";
    <?php
}
?>