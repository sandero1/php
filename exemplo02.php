<?php

//conhecendo os tipos de dados em PHP

$anoNascimento = 1990;

//$nomeCompleto = "Sandro Gentil Bento de Azevedo";

$nome1 = "João";

//não começar variáveis com números e apenas usar o underline de caractere especial

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " .  $sobrenome;  //aspas serve para adicionar um espaço no nome + sobrenome

//pontos são usados para concatenar

echo $nomeCompleto;

 // exit ;  //php para a execução do código

echo $nome1;

echo "<br/>";

//unset ($nome1); //unset tira a(s) variavel(eis) em questão

if (isset($nome1)){  //verifica se a variável existe

	echo $nome1;
}


?>