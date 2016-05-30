<?php
$id_articulo = $_GET['art'];

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
                <li><a href="index.php">Catalogo</a></li>
                <li><a href="alta_cliente.php">Registrar</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            </ul>
        </div>
    </div>
</nav>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque commodi cum, dignissimos dolor enim illo
    nostrum qui sapiente tempora? Ab aperiam blanditiis eos exercitationem facere, maxime molestias perferendis
    saepe.</p>

<?php
    echo $id_articulo;
?>

<script>
    $('.btn_agregar').on('click', function () {
        console.log($('#cantidad').val());
        console.log(getQueryVariable("art"));
        $.ajax({
            data: {
                "cantidad": $('#cantidad').val(),
                "id_producto": getQueryVariable("art")
            },
            url: 'php/carro.php',
            type: 'post',
            success: function (response) {
                console.log(response);
            }
        });
    });
</script>
</body>
</html>

