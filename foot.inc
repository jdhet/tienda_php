</div>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').dataTable({
            "order": [[3, "desc"]]
        });
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $(".Editar").click(function () {
            var caja = $(this).val();
            var parametros = { "id": caja };
            $.ajax({
                data: parametros,
                url: 'php/editarEquipo.php',
                type: 'post',
                success: function (response) {
                    var json = response;
                    var obj = $.parseJSON(json);
                    $('#modal2').click();
                    $('#nombre2').val(obj[0].nombre);
                    $('#piezas2').val(obj[0].piezas);
                    $('#dimension2').val(obj[0].dimension);
                    $('#descripcion2').val(obj[0].descripcion);
                    $('#oculto').val(obj[0].id);
                }
            });
        });
        $(".Editar2").click(function () {
            var caja = $(this).val();
            var parametros = { "id": caja };
            $.ajax({
                data: parametros,
                url: 'php/editarProveedor.php',
                type: 'post',
                success: function (response) {
                    var json = response;
                    var obj = $.parseJSON(json);
                    $('#modal3').click();
                    $('#nombre2').val(obj[0].nombre);
                    $('#direccion2').val(obj[0].direccion);
                    $('#telefono2').val(obj[0].telefono);
                    $('#oculto').val(obj[0].id);
                }
            });
        });
        $(".Editar3").click(function () {
            var caja = $(this).val();
            var parametros = { "id": caja };
            $.ajax({
                data: parametros,
                url: 'php/editarCliente.php',
                type: 'post',
                success: function (response) {
                    var json = response;
                    var obj = $.parseJSON(json);
                    $('#modal3').click();
                    $('#nombre3').val(obj[0].nombre);
                    $('#direccion3').val(obj[0].direccion);
                    $('#telefono3').val(obj[0].telefono);
                    $('#oculto').val(obj[0].id);
                }
            });
        });
        $('#modal2').hide();
        $('#modal3').hide();
        $('#modal4').hide();

        $(".Entrada").click(function () {
            var caja = $(this).val();
            $('#modal3').click();
            $('#valor').val('');
            $('#oculto2').val(caja);
        });
        $(".Salida").click(function () {
            var caja = $(this).val();
            $('#modal4').click();
            $('#valor').val('');
            $('#oculto3').val(caja);
        });
    });
</script>
</body>
</html>