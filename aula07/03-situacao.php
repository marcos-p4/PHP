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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;

        echo "A média entre a $nota1 e a $nota2 é $m<br>";

        echo "O aluno foi ".($sit = ($m<6)?"Reprovado":"Aprovado");

    ?>
    
</body>
</html>