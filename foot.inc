</div>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        alert('Query Variable ' + variable + ' not found');
    }
    $(document).ready(function () {
        $('.btn_agregar').on(function () {
            console.log($('#cantidad').val());
            console.log(getQueryVariable("art"));
            $.ajax({
                data: {
                    "cantidad": $('#cantidad').val(),
                    "id_producto": getQueryVariable("art")
                },
                url: 'php/carro.php',
                type: 'post',
                success: function (response) {
                    console.log(response);

                }
            });
        })
        $('#example').dataTable({
            "order": [[3, "desc"]]
        });
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    });
</script>
</body>
</html>