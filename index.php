<?php
$tab = array(1,5,6,10);
function decompose($tab){
    $value = array();
    $val = array();
    foreach ($tab as $i) {
       if ($i %2 == 0){
           array_push($val, $i);
       }
       else{
           array_push($value, $i);
       }
    }
    print_r($val);
    print_r($value);
}

echo decompose($tab);




