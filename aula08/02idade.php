<!DOCTYPE html>
<?php
$nome = isset ($_GET["nome"])?$_GET["nome"]:"[não iformado]";
$ano = isset ($_GET["ano"])?$_GET["ano"]:0;
$sexo = isset ($_GET["sexo"])?$_GET["sexo"]:"[não iformado]";
$idade = 2022 - $ano;

echo "$nome é $sexo tem $idade anos.";

?>
<a href="02exercicio.html">Voltar</a>