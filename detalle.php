<?php
include "php/conexion.php";
$id_articulo = $_GET['art'];
$s = "SELECT articulo.*, marca.descripcion AS marca FROM articulo  INNER JOIN marca on articulo.id_marca=marca.id  where articulo.id='{$id_articulo}'";
$fila= mysqli_fetch_array(mysqli_query($conexion, $s));

?>
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


<div class='col-md-4'>
	<img src='img/<?php echo $fila['imagen']?>' class='img-responsive img-thumbnail'>
	</div>
<div class='col-md-8 text-left'>
	<h3>Producto: <?php echo $fila['descripcion']?><br>
		Modelo: <?php echo $fila['modelo']?><br>
		Precio: <?php echo $fila['precio']?><br>
		Disponible:<?php echo $fila['cantidad']?><br>
        Cantidad:<input type="text" id="cantidad" value="1"><br>
    </h3>
    <button type="button" class="btn btn_primary btn_agregar">Agregar a carrito</button>
    <script src="js/jquery.min.js"></script>
    
<script>

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        alert('Query Variable ' + variable + ' not found');
    }

    $('.btn_agregar').on('click', function () {
        $.ajax({
            data: {
                "cantidad": $('#cantidad').val(),
                "id_producto": getQueryVariable("art")
            },
            url: 'php/carrito.php',
            type: 'post',
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
</script>
</body>
</html>

