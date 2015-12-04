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
    ['park' => 'Crater Lake',       'location' => 'Oregon',                 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05',  'description' => 'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake in the United States and is famous for its vivid blue color and water clarity. There are two more recent volcanic islands in the lake, and, with no inlets or outlets, all water comes through precipitation.'],
    ['park' => 'Dry Tortugas',      'location' => 'Florida',                'date_established' => '1992-10-26', 'area_in_acres' => '64701.22',   'description' => 'The islands of the Dry Tortugas, at the westernmost end of the Florida Keys, are the site of Fort Jefferson, a Civil War-era fort that is the largest masonry structure in the Western Hemisphere. With most of the park being remote ocean, it is home to undisturbed coral reefs and shipwrecks and is only accessible by plane or boat.'],
    ['park' => 'Grand Canyon',      'location' => 'Arizona',                'date_established' => '1919-02-26', 'area_in_acres' => '1217403.32', 'description' => 'The Grand Canyon, carved by the mighty Colorado River, is 277 miles (446 km) long, up to 1 mile (1.6 km) deep, and up to 15 miles (24 km) wide. Millions of years of erosion have exposed the colorful layers of the Colorado Plateau in countless mesas and canyon walls, visible from both the north and south rims, or from a number of trails that descend into the canyon itself.'],
    ['park' => 'Josua Tree',        'location' => 'California',             'date_established' => '1994-10-31', 'area_in_acres' => '789745.47',  'description' => 'Covering large areas of the Colorado and Mojave Deserts and the Little San Bernardino Mountains, this exotic desert landscape is populated by vast stands of the famous Joshua tree. Great changes in elevation reveal starkly contrasting environments including bleached sand dunes, dry lakes, rugged mountains, and maze-like clusters of monzogranite monoliths.'],
    ['park' => 'Mammoth Cave',      'location' => 'Kentucky',               'date_established' => '1941-07-01', 'area_in_acres' => '52830.19',   'description' => 'With more than 400 miles (640 km) of passageways explored, Mammoth Cave is by far the world\'s longest cave system. Subterranean wildlife includes eight bat species, Kentucky cave shrimp, Northern cavefish, and cave salamanders. Above ground, the park provides recreation on the Green River, 70 miles of hiking trails, and plenty of sinkholes and springs.'],
    ['park' => 'Mesa Verde',        'location' => 'Colorado',               'date_established' => '1906-06-29', 'area_in_acres' => '52121.93',   'description' => 'This area constitutes over 4,000 archaeological sites of the Ancestral Puebloan people, who lived here and elsewhere in the Four Corners region for at least 700 years. Cliff dwellings built in the 12th and 13th centuries include the famous Cliff Palace, which has 150 rooms and 23 kivas, and the Balcony House, with its many passages and tunnels.'],
    ['park' => 'Petrified Forest',  'location' => 'Arizona',                'date_established' => '1962-12-09', 'area_in_acres' => '93532.57',   'description' => 'This portion of the Chinle Formation has a great concentration of 225-million-year-old petrified wood. The surrounding Painted Desert features eroded cliffs of wonderfully red-hued volcanic rock called bentonite. There are also dinosaur fossils and over 350 Native American sites.'], 
    ['park' => 'Rocky Mountain',    'location' => 'Colorado',               'date_established' => '1915-01-26', 'area_in_acres' => '265828.41',  'description' => 'Bisected north to south by the Continental Divide, this portion of the Rockies has ecosystems varying from over 150 riparian lakes to montane and subalpine forests to treeless alpine tundra. Wildlife including mule deer, bighorn sheep, black bears, and cougars inhabit its igneous mountains and glacier valleys. Longs Peak, a classic Colorado fourteener, and the scenic Bear Lake are popular destinations, as well as the famous Trail Ridge Road, which reaches an elevation of more than 12,000 feet (3,700 m).'],
    ['park' => 'Sequoia',           'location' => 'California',             'date_established' => '1890-09-25', 'area_in_acres' => '404051.17',  'description' => 'This park protects the Giant Forest, which boasts some of the world\'s largest trees, the General Sherman being the largest in the park. It also has over 240 caves, a scenic segment of the Sierra Nevada including the tallest mountain in the contiguous United States, and Moro Rock, a photogenic granite dome.'],
    ['park' => 'Yellowstone',       'location' => 'Wyoming, Montana, Idaho','date_established' => '1872-03-01', 'area_in_acres' => '2219790.71', 'description' => 'Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country.[65]'],
];

// foreach ($parks_seeder as $park) {
//     $query = "INSERT INTO national_parks (park, location, date_established, area_in_acres, description) VALUES ('{$park['park']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}', '{$park['description']}')";

//     $stmt = $dbc->prepare($query);

//     echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
// }
$stmt = $dbc->prepare('INSERT INTO national_parks (park, location, date_established, area_in_acres, description) VALUES (:park, :location, :date_established, :area_in_acres, :description)');

foreach ($parks_seeder as $park) {
    $stmt->bindValue(':park', $park['park'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

    $stmt->execute();
}
// Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);
