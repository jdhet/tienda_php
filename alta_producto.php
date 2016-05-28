<?php include "head.inc" ?>
    <h3>Alta Producto</h3>

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
                include "php/conexion.php";
                $sql = "SELECT * FROM marca";
                $resultado = mysqli_query($conexion, $sql);
                while ($fila = mysqli_fetch_array($resultado)) {
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
                include "php/conexion.php";
                $sql = "SELECT * FROM tipo_articulo";
                $resultado = mysqli_query($conexion, $sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                    <option value="<?php echo $fila['id'] ?>"><?php echo $fila['descripcion'] ?></option>
                    <?php
                }
                ?>
            </select>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
<?php include "foot.inc" ?>