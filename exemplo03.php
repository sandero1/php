<?php

//variáveis básicas

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

/* ----------------------------------  */

//variaveis compostas

$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2];  //posição na array começa em 0

$nascimento = new DateTime();  //quando aparecer new, orientação de objetos está sendo utilizado

//var_dump ($nascimento);

/* ----------------------------------  */

//tipos especiais

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

?>