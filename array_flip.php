<?php

function my_array_flip(array $array): array {
    $newArray = [];

    foreach($array as $key => $value){
        if (is_int($value) || is_string($value)){
            $newArray[$value] = $key;
        } else {
            echo "Warning:  my_array_flip(): Can only flip STRING and INTEGER values!" . '<br>';
        }
    }
    echo '<br>';
    return $newArray;
}

//modify
//pull
$input = array("1oranges", "apples", "pears", 12.5, 3, 3, 3);

echo '<pre>';
var_dump(my_array_flip($input));
echo '<pre>';
echo '<br>';
var_dump(array_flip($input));      // проверка результатов рабочей функцией
