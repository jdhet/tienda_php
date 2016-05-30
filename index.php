<?php
session_start();
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


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" src="img/slider/img-1.jpg" alt="Chania">
        </div>

        <div class="item">
            <img class="img-responsive" src="img/slider/img-2.jpg" alt="Chania">
        </div>

        <div class="item">
            <img class="img-responsive" src="img/slider/img-3.jpg" alt="Flower">
        </div>

        <div class="item">
            <img class="img-responsive" src="img/slider/img-4.jpg" alt="Flower">
        </div>

        <div class="item">
            <img class="img-responsive" src="img/slider/img-5.jpg" alt="Flower">
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>NUESTROS PRODUCTOS</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <?php
				if(count($_SESSION['carro'])>0)
				{
					echo "<li><a href='index.php?secc=add'>Mi carro(".count($_SESSION['carro']).")</a></li>";
				}
                include "php/conexion.php";
                $query="SELECT * FROM marca;";
                $resultado=mysqli_query($conexion, $query);
                while ($fila= mysqli_fetch_array($resultado)){
                ?>
                <li>
                    <a href="index.php?secc=index&cat=<?php echo $fila['id'];?>"><i class="glyphicon glyphicon-chevron-right"></i> <?php echo $fila['descripcion'] ?> </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        
		<div class="col-md-10">
			<div class="row text-center">
            	<?php
				if(!isset($_GET['secc']))
					$_GET['secc']='index';
				if($_GET['secc']=='index')
				{
					$query="SELECT articulo.*, marca.descripcion AS marca
					FROM articulo 
					INNER JOIN marca on articulo.id_marca=marca.id ";
					if(isset($_GET['cat']) and $_GET['cat']>0)
						$query.="where id_marca='{$_GET['cat']}'";
					$resultado=mysqli_query($conexion, $query);
					while ($fila= mysqli_fetch_array($resultado)){
						?>
					<div class="col-sm-3 col-lg-3 col-md-3">
						<div class="thumbnail">
							<img src=img/<?php echo $fila['imagen'];?> class="img-rounded" alt="Cinque Terre">
							<div class="caption">
								<h4><?php echo $fila['marca']."-".$fila['modelo']?></h4>
								<p><?php echo $fila['descripcion']?> </p>
								<!--<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Comprar</button>-->
<!--								<a href="index.php?secc=add&art=--><?php //echo $fila['id'];?><!--" class="btn btn-primary btn-xs">AGREGAR AL CARRITO</a>-->
								<a href="detalle.php?secc=view&art=<?php echo $fila['id'];?>" class="btn btn-default btn-xs">MAS INFORMACION</a>
							</div>
						</div>
					</div>
					<?php
					}
				}
				elseif($_GET['secc']=='add')
				{
					include("carro.php");
				}
				elseif($_GET['secc']=='view')
				{
					include("detalle.php");
				}				
				elseif($_GET['secc']=='venta')
				{
					include("venta.php");
				}				
                ?>
			</div><!-- row text-center-->
		</div><!--col-md-10-->
	</div><!--row-->

    <footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Juan Diego Herrera Trinidad 2016</p>
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