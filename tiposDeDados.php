<?php

// strings == "qualquer coisa dentro de aspas";

// booleans == true ou false;

// int == números inteiros 12, 34, 25;

// double == números quebrados 12.5, 34.2, 25.4  -- (também podem ser chamados de float);

// Arrays [] == são vários valores juntos em uma só variável. EX: $dados = ['Murilo',17,'são joão das duas pontes'];
//os arrays tem posições, então o valor 'Murilo' está na posição 0, o 17 está na posição 1, e 'são joão...' está na posicão 2
//dito isso, para 'mencionar' um desses arrays utiliza-se a sua posição, então para 'mencionar' o nome Murilo em um var_dump é preciso usar:
//var_dump($dados[0]); EXEMPLO NO CÓDIGO:


$dados = ['Murilo',17,'São João das Duas Pontes'];
var_dump($dados[0]);

//Também existe uma maneira de mencionar um array sem utilizar posição:

$dados = ['name' =>'Murilo', 'idade' =>17, 'cidade' =>'São João das Duas Pontes'];
var_dump($dados['cidade']);

?>
