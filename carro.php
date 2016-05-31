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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="logo_index" src="img/logos/logo_index.jpg" alt="">
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <h3>Tiendita.com</h3>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="carro.php">Carrito</a></li>
                <li><a href="index.php">Catalogo</a></li>
                <li><a href="alta_cliente.php">Registrar</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>

            </ul>
        </div>
    </div>
</nav>

<?php
session_start();
include "php/conexion.php";
?>

<div class="container">
    <h2>PRODUCTOS EN EL CARRO</h2>
<?php
if ($_SESSION['contador'] > 0) {
    ?>
    <table class="table table-hover">
    <thead>
    <tr>
        <th>Descripcion</th>
        <th>Modelo</th>
        <th>Cantidad a pedir</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Sutotal</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $suma =0;
    for ($c = 0; $c < $_SESSION['contador']; $c++) {
        $consulta = "SELECT * FROM articulo WHERE id=" . $_SESSION['id'][$c] . ";";
        $fila = mysqli_fetch_array(mysqli_query($conexion, $consulta));
        $suma+=$_SESSION['cantidad'][$c]*$fila['precio'];
        ?>
            <tr>
                <td><?php echo $fila['descripcion']; ?></td>
                <td><?php echo $fila['modelo']; ?></td>
                <td><?php echo $_SESSION['cantidad'][$c]; ?></td>
                <td><img style="border-radius: 5px; border: solid 1px #000" src="img/<?php echo $fila['imagen']; ?>" alt="" width="100px" height="100px"></td>
                <td><?php echo "$".$fila['precio'].".00"; ?></td>
                <td><?php echo "$".$_SESSION['cantidad'][$c]*$fila['precio'].".00"; ?></td>
            </tr>
        <?php
    }
    ?>
    <tr>
        <td colspan="4"></td>
        <td><b>Total: </b></td>
        <td><b style="color: #00ca6d"><?php echo "$".$suma.".00"; ?></b></td>
    </tr>
    </tbody>
    </table>

    <?php
} else {
    ?>
    <div class='alert alert-danger'>NO TIENE PRODUCTOS EN SU CARRO DE COMPRAS</div>
    <?php
}
?>
    </div>
</body>
</html>
