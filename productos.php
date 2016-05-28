<?php
include "php/conexion.php";
$consulta = "SELECT * FROM articulo";
$resultado = mysqli_query($conexion, $consulta);
$consulta2 = "SELECT * FROM marca";
$resultado2 = mysqli_query($conexion, $consulta2);
$consulta3 = "SELECT * FROM tipo_articulo";
$resultado3 = mysqli_query($conexion, $consulta3);
?>
<?php include "head.inc"; ?>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">AGREGAR EQUIPO</button>
    <a href="reporteequipos.php" class="btn btn-danger">REPORTE GENERAL</a>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span
                            class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">AGREGAR EQUIṔO</h4>
                </div>
                <div class="modal-body">
                    <form action="php/productos/alta.php" method="post">
                        <label for="">Descripcion</label><br/>
                        <input type="text" placeholder="DESCRIPCION" name="descripcion" class="form-control"><br>
                        <label for="">cantidad</label><br/>
                        <input type="text" placeholder="CANTIDAD" name="cantidad" class="form-control"><br>
                        <label for="">Modelo</label><br/>
                        <input type="text" placeholder="MODELO" name="modelo" class="form-control"><br>
                        <label for="">Precio</label><br/>
                        <input type="text" placeholder="PRECIO" name="precio" class="form-control"><br>
                        <label for="">Marca</label><br>
                        <select name="marca" id="" class="form-control"><br/><br/><br/>
                            <?php
                            while ($fila = mysqli_fetch_array($resultado2)) {
                                printf($fila['descripcion']);
                                ?>
                                <option value="<?php echo $fila['id'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <label for="">Descripcion</label><br>
                        <select name="tipo_articulo" id="" class="form-control">
                            <?php

                            while ($fila = mysqli_fetch_array($resultado3)) {
                                ?>
                                <option value="<?php echo $fila['id'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div></br></br></br>

    <button id="modal2" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">ACTUALIZAR EQUIPO</button>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span
                            class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">ACTUALIZAR</h4>
                </div>
                <div class="modal-body">
                    <form action="php/editarEquipo2.php" method="post">
                        <label for="">NOMBRE</label><br/>
                        <input id="nombre2" type="text" name="nombre2" class="form-control"><br>
                        <label for="">PIEZAS</label><br/>
                        <input id="piezas2" type="text" name="piezas2" class="form-control"><br>
                        <label for="">DIMENSION</label><br/>
                        <input id="dimension2" type="text" name="dimension2" class="form-control"><br>
                        <label for="">DESCRIPCION</label><br/>
                        <input id="descripcion2" type="text" name="descripcion2" class="form-control"><br>
                        <input type="hidden" name="oculto" value="Mensaje" id="oculto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>MODELO</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>MARCA</th>
            <th>TIPO</th>
            <th>ELIMINAR</th>
            <th>EDITAR</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>MODELO</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>MARCA</th>
            <th>TIPO</th>
            <th>ELIMINAR</th>
            <th>EDITAR</th>

        </tr>
        </tfoot>
        <tbody>
        <?php
        while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $fila['descripcion']; ?></td>
                <td><?php echo $fila['cantidad']; ?></td>
                <td><?php echo $fila['modelo']; ?></td>
                <td><?php echo $fila['imagen']; ?></td>
                <td><?php echo $fila['precio']; ?></td>
                <td><?php echo $fila['id_marca']; ?></td>
                <td><?php echo $fila['id_tipo']; ?></td>
<!--                <td>-->
<!---->
<!--                    --><?php
//                    $consulta2 = "SELECT * FROM proveedor WHERE id='".$fila['proveedor']."'";
//                    $resultado2 = mysqli_query($conexion, $consulta2);
//                    while ($fila2 = mysqli_fetch_array($resultado2)) {
//                        echo $fila2['nombre'];
//                    }
//                    ?>
<!--                </td>-->
                <td><?php echo "<a href='php/bajaproducto.php?id=" . $fila['id'] . "'><button>ELIMINAR</button></a>" ?></td>
                <td><?php echo "<a href='php/editarCliente2.php?id=" . $fila['id'] . "'><button>EDITAR</button></a>" ?></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php include "foot.inc"; ?>