<?php

// while(condição) {}  enquanto a condição do while for 'true' ele não parará de excutar

$empregado = true;
$erros = 1;

while($empregado) {
    echo 'eu errei '. $erros . ' vezes e meu chefe não gostou disso.' . PHP_EOL;
    $erros++;
    
    if ($erros == 6) {
        $empregado = false;
        echo 'perdi meu emprego' . PHP_EOL;
    }
}

?>
