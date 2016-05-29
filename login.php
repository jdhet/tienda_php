<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>SISTEMA DE TELEFONIA | ITSM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css"/>
</head>
<body class="bg-black">
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <section class="container">
            <a id="titulo" href="#" class="navbar-brand">SISTEMA DE COMPRAS ITSM</a>

        </section>
    </nav>
</header>
<div class="container">
    <div class="form-box" id="login-box">
        <div class="header">INICIAR SESION</div>
        <form action="php/login.php" method="post">
            <div class="body bg-gray">
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="USUARIO"/>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="PASSWORD"/>
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn bg-olive btn-block">INICIAR</button>
                <a href="">NUEVO USUARIO </a>
            </div>
        </form>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>