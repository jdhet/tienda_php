<?php
session_start();
function existeSesion() {
    if (!isset($_SESSION['usuario']))
    {
        echo '<SCRIPT language="JavaScript">
        window.location="login.php"
        </script>';
    }
}

function eliminarSesion(){
    session_destroy();
    {
        echo '<SCRIPT language="JavaScript">
        window.location="../index.php";
        </script>';
    }
}

?>