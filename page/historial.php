<?php
    include "./../includes/config.php";
    date_default_timezone_set('America/Mexico_City');
    $fh = date("d-m-Y H:i:s");
    $peticion = "INSERT INTO historial VALUES(null, '".$fh."', 1)";
    $resultado = mysqli_query($conexion, $peticion);

    header("Location:./");
?>