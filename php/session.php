<?php

function existeSesion() {
    if (!isset($_SESSION['usuario']))
    {
        echo '<SCRIPT language="JavaScript">
        window.location="../login.html";
        </script>';
    }
}

function eliminarSesion(){
    session_destroy();
}

?>