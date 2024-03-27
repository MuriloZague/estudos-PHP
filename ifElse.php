<?php

$name = 'Murilo';
$age = 18;
$employed = true;


if ($name == 'Murilo') {
    echo "correto";
} else if ($name == 'Miurilo') {
    echo "errado";
}else {
    echo "eradoerado";
};

if (($age >= 18) && $employed == false) {
    echo "trabalhe";
} else if ($age <=17) {
    echo "naotemidade";
} else {
    echo "trabalhe mais";
}



?>