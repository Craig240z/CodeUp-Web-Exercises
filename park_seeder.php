<?php

// Create a new file called park_seeder.php. 
// In that file use PDO to connect to your parks_db. 
// First, add a query to delete all the records from national_parks. 
// Next, insert information for ten different national parks into your new national_parks table. 
// Run it in the same manner as the park_seeder.php script. 
// Hint: An array of data may be useful here.
require_once 'config_parks.php';
require_once 'db_connect.php';

$query = 'TRUNCATE national_parks';
$dbc->exec($query);

$parks_seeder = [
    ['park' => 'Crater Lake',       'location' => 'Oregon',                 'date_established' => 'May 22, 1902',       'area_in_acres' => '183224.05'],
    ['park' => 'Dry Tortugas',      'location' => 'Florida',                'date_established' => 'October 26, 1992',   'area_in_acres' => '64701.22'],
    ['park' => 'Grand Canyon',      'location' => 'Arizona',                'date_established' => 'February 26, 1919',  'area_in_acres' => '1217403.32'],
    ['park' => 'Josua Tree',        'location' => 'California',             'date_established' => 'October 31, 1994',   'area_in_acres' => '789745.47'],
    ['park' => 'Mammoth Cave',      'location' => 'Kentucky',               'date_established' => 'July 1, 1941',       'area_in_acres' => '52830.19'],
    ['park' => 'Mesa Verde',        'location' => 'Colorado',               'date_established' => 'June 29, 1906',      'area_in_acres' => '52121.93'],
    ['park' => 'Petrified Forest',  'location' => 'Arizona',                'date_established' => 'December 9, 1962',   'area_in_acres' => '93532.57'],
    ['park' => 'Rocky Mountain',    'location' => 'Colorado',               'date_established' => 'January 26, 1915',   'area_in_acres' => '265828.41'],
    ['park' => 'Sequoia',           'location' => 'California',             'date_established' => 'September 25, 1890', 'area_in_acres' => '404051.17'],
    ['park' => 'Yellowstone',       'location' => 'Wyoming, Montana, Idaho','date_established' => 'March 1, 1872',      'area_in_acres' => '2219790.71'],
];

foreach ($parks_seeder as $park) {
    $query = "INSERT INTO national_parks (park, location, date_established, area_in_acres) VALUES ('{$park['park']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


// Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);
