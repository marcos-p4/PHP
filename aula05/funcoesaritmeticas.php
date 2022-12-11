<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <center>
<div class="container">
    
        <h1>Funções Aritméticas</h1>
</div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo "Valores recebidos: $v1 e $v2"; ?>
        </div>
        <div class="alert alert-secondary" role="alert">
        <?php echo "O valor absoluto de $v2: ".abs($v2); ?>
        </div>
        <div class="alert alert-secondary" role="alert">
        <?php echo "O valor de $v1<sup>$v2</sup> é: ".pow($v1, $v2); ?>
        </div>
        <div class="alert alert-success" role="alert">
        <?php echo "A raiz de $v1 é: ".sqrt($v1) ?>
        </div>
        <div class="alert alert-danger" role="alert">
         <?php echo "O valor arredondado de $v2 é: ".round($v2); ?>
        </div>
        <div class="alert alert-light" role="alert">
        <?php echo "O valor inteiro de $v2 é: ".intval($v2); ?>
        </div>
        <div class="alert alert-dark" role="alert">
        <?php echo "O valor de $v1 em moeda é: R$: ".number_format($v1, 2, ","); ?>
        </div>
        
        
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



</body>
</html>