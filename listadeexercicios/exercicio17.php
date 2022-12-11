<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <div>
        <form method="post" action=#>
            <fieldset>
             Informe valor em centímetros: <input type="number" name="cm"/><br>
            
            <input type="submit" value="Calcular" name = "but">
            </fieldset>
            </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['but']))
{
    $c = $_POST['cm'];    
    $p = $c/2.54;
    echo "O valor de $c centímetros é de $p polegadas";
}


?>