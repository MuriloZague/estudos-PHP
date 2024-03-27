<?php

/**
 * 
 * EXECUTANDO SCRIPT SEM ARGUMENTOS:
 * php argumentosScript.php
 * 
 * EXECUTANDO SCRIPT COM ARGUMENTOS:
 * php argumentosScript.php variavel1 variavel2
 * 
 * 
 */

 
if(!isset($argv[1])) {
    die('Preencha um argumento. EX: php argumentosScript.php QUALQUERNUMERO' . PHP_EOL);
}

$age = $argv[1];

if (!is_numeric($argv[1])) {
    die('escreve um número');
} 

if ($age >= 18) {
    echo 'você é maior de idade';
} else {
    echo 'você não é maior de idade';
}


?>