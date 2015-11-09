<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Dean', 'Tina', 'Mel', 'Amy', 'Michael'];
 
$query = 'Michael';

function valueInArray($search, $array) {
    $result = array_search($search, $array);
        if ($result === false) {
            return false;
        } else {
            return true;
        }
}
$result = valueInArray($query, $names);

if ($result) {
    echo "The name $query was found in the $result array index of " . array_search($query, $names) . PHP_EOL;
} else { 
    echo "The search was not found." . PHP_EOL; 
}

function compareArrays($names, $compare) {
    $result = array_intersect($names, $compare); 
    return count($result);
 }
    $result = compareArrays($names, $compare);
    echo "The two arrays have {$result} elements in common." . PHP_EOL;