<html>
<head>
    <title></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

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

</body>
</html>
