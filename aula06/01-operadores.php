<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em vídeo - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <center>

    <?php
    $preco = $_GET["p"];
        
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo "O preço original é R$ $preco"; ?>
        </div>
        <div class="alert alert-secondary" role="alert">

            
        <?php   $preco += ($preco * 10/100);
                echo "O o preço com acréscimo de 10% é: R$".number_format($preco, 2); ?>
        </div>

        <div class="alert alert-secondary" role="alert">
        <?php $preco -= ($preco *10/100); 
            echo "O valor preço com 10% de desconto é: R$".number_format($preco,2); ?>
        </div>

        
       <!-- <div class="alert alert-success" role="alert">
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
        </div> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>