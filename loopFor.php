<?php

// for (valor inicial; condição; incremento/decremento) {}

for ($contagem = 0; $contagem <= 7; $contagem++) {  // para incrementar é ++ e para decrementar é --
    echo 'a contagem chegou a ' . $contagem . '.' . PHP_EOL;
}


// tabuada
$tabuada = 7;
for ($i = 1; $i <= 10; $i++) {
    echo "$tabuada x $i = " . ($tabuada * $i) . PHP_EOL;
}


// Contagem regressiva
for ($contagemR = 10; $contagemR >= 1; $contagemR--) {
    echo 'Contagem regressiva: ' . $contagemR . PHP_EOL;
}


?>
