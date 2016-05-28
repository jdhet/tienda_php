<?php include "head.inc" ?>
    <h3>Alta Cliente</h3>
    <div class="modal-body">
        <form action="php/clientes/alta.php" method="post">
            <label for="">FOLIO</label><br/>
            <input type="text" placeholder="NOMBRE" name="nombre" class="form-control"><br>
            <label for="">CLAVE</label><br/>
            <input type="text" placeholder="APELLIDO PATERNO" name="apellido_p" class="form-control"><br>
            <label for="">RFC</label><br/>
            <input type="text" placeholder="APELLIDO MATERNO" name="apellido_m" class="form-control"><br>
            <label for="">FECHA</label><br/>
            <input type="text" placeholder="DIRECCION" name="direccion" class="form-control"><br>
            <label for="">HORA</label><br/>
            <input type="text" placeholder="CORREO" name="correo" class="form-control"><br>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary">
        </form>
    </div>
<?php include "foot.inc" ?>