<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
    <div>
        <form method="post" action=#>
            <fieldset>
             Informe valor em polegadas: <input type="number" name="pol"/><br>
            
            <input type="submit" value="Calcular" name = "but">
            </fieldset>
            </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['but']))
{
    echo "AAA";
    $p = $_POST['pol'];
    
    $c = (int)$p * 2.54;
    echo "O valor de $p polegadas em contímetro é $c";
}


?>