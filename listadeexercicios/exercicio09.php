<?php
    $c = isset($_GET["temp"])?$_GET["temp"]: "temperatura não informada";
    $k = (int)$c + 273.15;
    var_dump("temp");

    echo "$c graus celcius é $k graus kelvin";
?>