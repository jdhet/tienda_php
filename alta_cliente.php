<?php //include "head.inc" ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panel Administracion</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/simple-sidebar.css"/>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="css/jquery.dataTables_themeroller.css"/>

    </head>
    <body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        SCA
                    </a>
                </li>
                <li>
                    <a href="#">ALTA CLIENTE</a>
                </li>
<!--                <li>-->
<!--                    <a href="alta_producto.php">PRODUCTOS</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">PROVEEDORES</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">CLIENTES</a>-->
<!--                </li>-->
<!---->
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">MENU</a>
                        <h1>SISTEMA DE TELEFONIA</h1>

<h3>Alta Cliente</h3>
<div class="modal-body">
                    <form action="php/clientes/alta.php" method="post">
                        <label for="">NOMBRE</label><br/>
                        <input type="text" placeholder="NOMBRE" name="nombre" class="form-control"><br>
                        <label for="">APELLIDO PATERNO</label><br/>
                        <input type="text" placeholder="APELLIDO PATERNO" name="apellido_p" class="form-control"><br>
                        <label for="">APELLIDO MATERNO</label><br/>
                        <input type="text" placeholder="APELLIDO MATERNO" name="apellido_m" class="form-control"><br>
                        <label for="">DIRECCION</label><br/>
                        <input type="text" placeholder="DIRECCION" name="direccion" class="form-control"><br>
                        <label for="">CORREO</label><br/>
                        <input type="text" placeholder="CORREO" name="correo" class="form-control"><br>
                        <label for="">TELEFONO</label><br/>
                        <input type="text" placeholder="TELEFONO" name="telefono" class="form-control"><br>
                        <label for="">RFC</label><br/>
                        <input type="text" placeholder="RFC" name="rfc" class="form-control"><br>
                        <label for="">USUARIO</label><br/>
                        <input type="text" placeholder="USUARIO" name="usuario" class="form-control"><br>
                        <label for="">CONTRASEÑA</label><br/>
                        <input type="password" placeholder="CONTRASEÑA" name="contrasena" class="form-control"><br>


<!--                        <label> TIPO USUARIO</label><br>-->
<!--                        <select class="form-control" name="tipo_usuario">-->
<!--                            <option value="1" selected >Administrador</option>-->
<!--                        </select>-->
                        
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary">
                    </form>
                </div>
<?php include "foot.inc" ?>