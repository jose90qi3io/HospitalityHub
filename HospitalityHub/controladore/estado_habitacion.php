<?php
$color = "";

if (isset($_POST["estado"])) {
    $estado = $_POST["estado"];

    if ($estado == "Libre") {
        $color = "#00FF00"; // Green color code
    } else if ($estado == "Ocupada") {
        $color = "#FF0000"; // Red color code
    } else if ($estado == "En limpieza") {
        $color = "#FFFF00"; // Yellow color code
    }
}
?>
