<?php
$id=$_GET['art'];
//buscamos el producto por su codigo
$s = "SELECT articulo.*, marca.descripcion AS marca FROM articulo 
	INNER JOIN marca on articulo.id_marca=marca.id 
	where articulo.id='{$id}'";
$rs= mysqli_fetch_array(mysqli_query($conexion, $s));
echo "<div class='col-md-4'>";
	echo "<img src='img/{$rs['imagen']}' class='img-responsive img-thumbnail'>";
echo "</div>";
echo "<div class='col-md-8 text-left'>";
	echo "<h3>Marca: {$rs['marca']}<br>
		Producto: {$rs['descripcion']}<br>
		Modelo: {$rs['modelo']}<br>
		Precio: $ {$rs['precio']}</h3>";
	echo "<a href='index.php?secc=add&art={$rs['id']}' class='btn btn-primary'>Comprar</a>";
echo "</div>";
?>