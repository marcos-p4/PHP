<?php
    $k = $_GET["km"];
    $m = $k/3.6;

    echo "$k k/h é ".number_format($m,2);
?>