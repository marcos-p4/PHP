<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $atual = $_GET["aa"];
    echo "O ano atual é $atual<br>";

    echo "O ano atual é $atual, o ano anterior é ".--$atual;
    echo "<br>O ano que vem é ".++$atual;

    ?>
</body>
</html>