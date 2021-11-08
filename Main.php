<?php
include "Operaciones.php";

$op = new Operaciones();
$op->operacion($_GET["num1"], $_GET["num2"]);

echo "<script>
        alert('El resultado es: '+$op->resultado);
        window.history.back();
    </script>";

?>