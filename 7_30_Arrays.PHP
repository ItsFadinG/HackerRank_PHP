//Explode is very Important.
//Explode Syntax >> explode(Sperator, String, Limit)
// explode(' ', $arrayName)
// Difficult to understand Now.
<?php

$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$array = array_reverse($arr, true);

foreach($array as $key=>$value){
    print_r($value." ");
}




?>
