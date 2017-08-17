<?php

// the code for the generating the random like the lotto system

/*function generateLotto($min, $max, $quantity){
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

// printing out in an array form
print_r( generateLotto(0,90,2) );

*/


function generateLotto($min, $max, $quantity){
    $numbers = range($min, $max);
     shuffle($numbers);
     $result = array_slice($numbers, 0, $quantity);
    return $result;
    
}

// printing out in an array form
print_r( generateLotto(0,90,5) );



?>