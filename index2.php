<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PRODUCTOS EXISTENTES</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/heroic-features.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">
    <link rel="stylesheet" media="screen" href="css/DT_bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
<nav class="navbar-fixed-top navbar-default" >
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
                <li><a href="#">Catalogo</a></li>
                <li><a href="alta_cliente.php">Registrar</a></li>
                <li><a href="login.html">Iniciar Sesion</a></li>
            </ul>
        </div>
    </div>
</nav>



<div id="myCarousel" class="carousel slide" data-ride="carousel">

</div>



<div class="container">
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h3>NUESTROS PRODUCTOS</h3>
        </div>
    </div>

    <div class="row">
        <!-- left, vertical navbar -->
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li>
                    <a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> About</a>
                </li>
                <li>
                    <a href="dashboard.html"><i class="glyphicon glyphicon-chevron-right"></i> Dashboard</a>
                </li>
                <li class="disabled">
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Calendar</a><!-- calendar.html -->
                </li>
                <li class="disabled">
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Statistics (Charts)</a>
                    <!-- stats.html -->
                </li>
                <li>
                    <a href="forms.html"><i class="glyphicon glyphicon-chevron-right"></i> Forms</a>
                </li>
                <li class="active">
                    <a href="tables.html"><i class="glyphicon glyphicon-chevron-right"></i> Tables</a>
                </li>
                <li>
                    <a href="buttons-and-icons.html"><i class="glyphicon glyphicon-chevron-right"></i> Buttons &amp;
                        Icons</a>
                </li>
                <li>
                    <a href="wysiwyg-editors.html"><i class="glyphicon glyphicon-chevron-right"></i> WYSIWYG Editors</a>
                </li>
                <li>
                    <a href="ui-and-interface.html"><i class="glyphicon glyphicon-chevron-right"></i> UI &amp; Interface</a>
                </li>
                <li>
                    <a href="error-pages.html"><i class="glyphicon glyphicon-chevron-right"></i> Error pages</a>
                </li>
                <li>
                    <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i> Submenu</a>
                    <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                        <li><a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Submenu 1</a></li>
                        <li><a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Submenu 2</a></li>
                        <li><a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Submenu 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class="col-md-10">
            <div class="row text-center">
                <?php
                include "php/conexion.php";
                $query="SELECT articulo.id,articulo.descripcion, marca.descripcion AS descripcion_articulo, articulo.modelo FROM `articulo` INNER JOIN marca on articulo.id_marca=marca.id;";
                $resultado=mysqli_query($conexion, $query);
                while ($fila= mysqli_fetch_array($resultado)){
                    ?>
                    <div class="col-md-3 col-sm-3 hero-feature">
                        <div class="thumbnail">
                            <img src=img/cfrontal.jpg class="img-rounded" alt="Cinque Terre">
                            <div class="caption">
                                <h3><?php echo $fila['descripcion_articulo']."-".$fila['modelo']?></h3>
                                <p><?php echo $fila['descripcion']?> </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    compr
                                </button>
                                <a href="#" class="btn btn-default">MAS
                                    INF</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Agregar a carro</h4>
                                <div style="display: none" class="alert alert-success caja_mensaje" role="alert">
                                    El Articulo Se A Agregado A Su Carro de compra
                                </div>
                            </div>
                            <div class="modal-body">
                                <i class="fa fa-cart-plus  fa-5x primary" aria-hidden="true"></i>
                                <label for="">ingrese la cantidad</label>
                                <input type="text" name="cantidad">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary btn_guardar">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>


                <hr>
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; Your Website 2014</p>
                        </div>
                    </div>
                </footer>

            </div>

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
                $('.btn_guardar').on('click', function () {
                    console.log('algo');
                    $('.caja_mensaje').show('slow');
                    setTimeout(function () {
                        $('.caja_mensaje').hide('slow');
                    }, 3000)
                })
            </script>
</body>
</html>
