<?php
session_start();
include("conexion.php");
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA DE TELEFONIA | ITSM</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    	<div class='container'>
   		<div class='row'>
   			<div class='col-md-12'>
	   		<div class='row'>
	    	<form name='frm' action='' method='post' class='form-inline'>
    			<div class="col-md-3">Articulo: <input type='text' name='art' value='' class='form-control'>
    			</div>
     			<div class="col-md-3">Marca: <input type='text' name='marca' value='' class='form-control'>
    			</div>
     			<div class="col-md-3">Modelo: <input type='text' name='modelo' value='' class='form-control'>
    			</div>
     			<div class="col-md-3"><input type='submit' name='modelo' value='Buscar' class='btn btn-primary'>
    			</div>
    		</form>
    		</div>
    		</div>

   			<div class='col-md-12'>
   				<div class='row'>
   					<br>
   					<?php
   						$sql = "select * from productos where estado=1";
   						if($_POST['art'])
   								$sql.=" and producto='{$_POST['art']}'";
						$q = mysqli_query($conexion,$sql);
						while($r = mysqli_fetch_array($q))
						{
							
							echo "<div class='col-md-3 thumbnail'>";
							echo "{$r['idproducto']}";
							echo "</div>";

							echo "<div class='col-md-3 thumbnail'>";
							echo "{$r['producto']}";
							echo "</div>";

						
							echo "<div class='col-md-3 thumbnail'>";
							echo "{$r['marca']}";
							echo "</div>";

							echo "<div class='col-md-3 thumbnail'>";
							echo "{$r['precio']}";
   							echo "</div>";

   						}
   					?>
   				</div>
   			</div>
   		</div>
    </div>
    </body>
</html>