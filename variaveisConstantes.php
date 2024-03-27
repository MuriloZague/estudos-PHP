<?php
//VARIÁVEIS (podem variar valores)
//$ para declarar variável
$name = "Murilo";
$age = 17;
echo $name," ", $age;

//Variáveis em vetores

$data = [
    'name' => 'Murilo',
    'age' => 17,
    'city' => 'São João das Duas Pontes'
];

echo $data['name'];

//CONSTANTES (nunca variam, valor fixo)
//definida usando 'define': define('nomeDaConstante', 'valorDaConstante';)):

define('name1', 'Murilooooo');
echo name1;




?>
