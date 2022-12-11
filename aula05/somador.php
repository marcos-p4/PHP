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
    
        <h1>Operadores Aritméticos</h1>
</div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $media = ($n1 + $n2)/2;
        
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo "Valores recebidos $n1 e $n2"; ?>
        </div>
        <div class="alert alert-secondary" role="alert">
        <?php echo "A soma vale: ".($n1 + $n2); ?>
        </div>
        <div class="alert alert-success" role="alert">
        <?php echo "A subtração vale: ".($n1 - $n2); ?>
        </div>
        <div class="alert alert-danger" role="alert">
        <?php echo "A multiplicação vale: ".($n1 * $n2); ?>
        </div>
        <div class="alert alert-warning" role="alert">
        <?php echo "A divisão vale: ".($n1 / $n2); ?>
        </div>
        <div class="alert alert-info" role="alert">
        <?php echo "O módulo vale: ".($n1 % $n2); ?>
        </div>
        <div class="alert alert-success" role="alert">
        <?php echo "A média vale $media"; ?>
        </div>
        
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



</body>
</html>