<?php

/** Dado Iteravel = stdClass ou array;
 * 
 *  foreach(dadoIteravel as dado) {}
 */


$names = ['Murilo', 'Maiara', 'Joao'];
foreach ($names as $name) {
    echo $name . PHP_EOL;
}



$user = [
    'name' => 'Murilo',
    'age' => 17,
    'student' => true
];
foreach ($user as $value) { // pegar apenas os valores ($value) sem os nomes (name , age, student)
    echo $value . PHP_EOL;
};

foreach ($user as $key => $value) { // pegar os valores ($value) junto com seus nomes ($key)
    echo $key . ' ' . $value . PHP_EOL;
};



// EXEMPLO COM VÁRIOS USUÁRIOS:



$users = [
    [
        'name' => 'Murilo',
        'age' => 17,
        'student' => true,
    ],
    [
        'name' => 'Maiara',
        'age' => 8,
        'student' => true,
    ],
    [
        'name' => 'Joao',
        'age' => 27,
        'student' => false,
    ],
];

foreach ($users as $key => $value) {  // pegar todos os usuarios dentro do array $users
    echo $key . " " . $value['name'] . PHP_EOL; // selecionando 'name' no $value
};



// CLASSES:



$pp = new StdClass;

$pp -> name = "Murilo";
$pp -> age = 17;

foreach($pp as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
};


?>
