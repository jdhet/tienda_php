<?php
session_start();
if ($_SESSION['contador'] > 0) {
    ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
    <?php
    for ($c = 0; $c < $_SESSION['contador']; $c++) {
        echo "id_producto: " . $_SESSION['id'][$c] . " cantidad" . $_SESSION['cantidad'] . "<br>";
    }
} else {
    ?>
    <div class='alert alert-danger'>NO TIENE PRODUCTOS EN SU CARRO DE COMPRAS</div>";
    <?php
}
?>