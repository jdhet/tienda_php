<?php
if($_SESSION['contador']>0)
{
	echo"<div class='col-md-12'>";
	echo "<form name='frm' action='index.php?secc=add' method='post' class='form-inline'>";
	echo "<table class='table table-striped table-bordered'>";
	echo "<tr><th>Partida</th><th>Producto</th><th>Cantidad</th><th> Precio</th><th>Subtotal</th></tr>";
	$x=1;$tt=0;
	foreach($carro as $r)
	{
		//buscamos el producto por su codigo
		$s = "SELECT articulo.*, marca.descripcion AS marca FROM articulo 
			INNER JOIN marca on articulo.id_marca=marca.id 
			where articulo.id='{$r['id']}'";
		$rs= mysqli_fetch_array(mysqli_query($conexion, $s));
		$st=$rs['precio']*$r['cta'];
		$tt+=$st;
		//<input type='hidden' name='id{$r['id']}' value='{$r['id']}'>
		echo "<tr>
			<td>$x </td>
			<td>{$rs['marca']} - {$rs['descripcion']} {$rs['modelo']}</td>
			<td align='right'><input type='number' name='{$r['id']}' value='{$r['cta']}' class='form-control' size='5'></td>
			<td align='right'>$ {$rs['precio']}</td>
			<td align='right'>$ {$st}</td>
			</tr>";
		$x++;
	}	
	echo "<tr><th></th><th></th><th></th><th class='text-right'>Total:</th><th class='text-right'>{$tt}</th></tr>";
	echo "</table>";
	echo "<input type='submit' value='Actualizar Cantidades' name='btnact' class='btn btn-primary'>"; 
	echo " <a href='index.php?secc=venta' class='btn btn-success'>Realizar venta</a>";
	echo "</form>";
	echo "</div>";
}
else
{
	echo "<div class='alert alert-danger'>NO TIENE PRODUCTOS EN SU CARRO DE COMPRAS</div>";
}
?>