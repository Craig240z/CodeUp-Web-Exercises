<?php

$person1 = [
    'first_name' => 'Amy',
    'last_name' => 'Wong',
    'email' => 'marsprincess@hotmail.com',
    'phone' => '1800hotlinebling'
];

$person2 = [
    'first_name' => 'Tina',
    'last_name' => 'Belcher',
    'email' => 'ilovebutts@horseandbutts.com.com',
    'phone' => '555-555-BUTT'
];

echo $person2['first_name'] . ' ' . $person2['last_name']. "\n";

$test = ['person1' => $person1, 'person2' => $person2];

var_dump($test);

$test['person3'] = $person3;

var_dump($test);