<?php

//A junção de arrays é possível da seguinte maneira:

$user = [
    'name' => 'Murilo',
    'age' => '17'
];

$workplace = [
    'companyname' => 'Fatec',
    'role' => 'Web-Developer'
];

$all = $user + $workplace;  //A junção de user e workplace.

print_r($all);  //print_r para printar arrays******


?>
