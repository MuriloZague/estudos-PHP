<?php
// Operadores && || ^ !
// Tudo é convertido em booleano antes da verificação

//Operador 'E' AND &&
$empregado = true;
$homeOffice = true;
var_dump($empregado && $homeOffice);

//Operador 'OU' OR ||

$empregado = true;
$homeOffice1 = false;
var_dump($empregado || $homeOffice);

//Operador 'OU EXCLUSIVO' XOR ^ (verifica se só uma é true)

$empregado = true;
$homeOffice = true;
var_dump($empregado ^ $homeOffice);

//Operador 'Não' NOT ! (retorna o contrário (se o valor for true retorna false))

$homeOffice = true;
var_dump(!$homeOffice)









?>
