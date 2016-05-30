<?php
$id=$_GET['art'];
//buscamos el producto por su codigo
$s = "SELECT articulo.*, marca.descripcion AS marca FROM articulo  INNER JOIN marca on articulo.id_marca=marca.id  where articulo.id='{$id}'";
$rs= mysqli_fetch_array(mysqli_query($conexion, $s));
echo "<div class='col-md-4'>";
	echo "<img src='img/{$rs['imagen']}' class='img-responsive img-thumbnail'>";
echo "</div>";
echo "<div class='col-md-8 text-left'>";
	echo "<h3>Marca: {$rs['marca']}<br>
		Producto: {$rs['descripcion']}<br>
		Modelo: {$rs['modelo']}<br>
		Precio: $ {$rs['precio']}<br>
		Disponible:{$rs['cantidad']}<br></h3>";
	?>


<label for="">CANTIDAD</label>
<input type="text" name="cantidad" value="1" class="form-group"><br>
	<?php
	echo "<a href='index.php?secc=add&art={$rs['id']}' class='btn btn-primary' class='btn_agregar' id='cantidad'>Agregar a carrito</a>";

echo "</div>";
?>


