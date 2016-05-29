<?php
include "php/session.php";
session_start();
existeSesion();
include "head.inc";
?>
<p>bienvenido <b><?php echo $_SESSION['usuario']; ?></b></p>
<?php include "foot.inc" ?>