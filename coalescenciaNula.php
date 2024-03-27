<?php
//A Coalescência Nula serve para checar se uma variável possui um valor
// valorPresefinido ?? retorno caso não exista valor;

$user = [
    'name' => 'Murilo',
    'age' => 17
];

echo $user['name'] ?? 'Murilada'; // Se a variável name não possuir valor ou não existir, ela terá o valor 'Murilada'


?>