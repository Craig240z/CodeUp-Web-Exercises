<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$combine = [];
 
$query = 'Michael';

function combine_arrays($names, $compare) {
     $combine = [];
     foreach ($names as $name1) {
        foreach ($compare as $name2) {
            if ($name1 == $name2) {
                array_push($combine, $name1); 
            } else if ($name1 != $name2) { 
                array_push($combine, $name1);
                array_push($combine, $name2);
            } 
                array_shift($compare);
                continue 2;
        }
     }
        return $combine;
    }

function valueInArray($search, $array) {
    $result = array_search($search, $array);
        if ($result === false) {
            return false;
        } else {
            return true;
        }
}

function compareArrays($names, $compare) {
    $result = array_intersect($names, $compare); 
    return count($result);
 }

$result = valueInArray($query, $names);

if ($result) {
    echo "The name $query was found in the $result array index of " . array_search($query, $names) . PHP_EOL;
} else { 
    echo "The search was not found." . PHP_EOL; 
}
    $result = compareArrays($names, $compare);
    echo "The two arrays have {$result} elements in common." . PHP_EOL;
    print_r($names);
    print_r($compare);
    $combine = combine_arrays($names, $compare);
    print_r($combine);