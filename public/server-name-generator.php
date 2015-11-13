<?php 
function randomServerNameGenerator($localzFightersArray, $localzAttributesArray) {
    $zAttribute = array_rand($localzAttributesArray);
    $zFighter = array_rand($localzFightersArray);
    $localServerName =  $localzAttributesArray[$zAttribute] . '-' .
                        $localzFightersArray[$zFighter];
    return $localServerName;
}

function page_controller() 
{
    $zFightersArray = array('Goku', 'Piccolo', 'Krillin', 'Tien', 'Yamcha', 'Chaozu', 'Master Roshi', 'Yajirobe', 'Vegeta', 'Gohan', 'Goten', 'Gotenks', 'Trunks');
    $zAttributesArray = array('Strong-willed', 'Rude', 'Loyal', 'Courageous', 'Impressive', 'Powerful', 'Fast', 'Destructive', 'Tenacious', 'Mercilous', 'Noble', 'Hero', 'Ultimate', 'Devastating');

    $serverName = randomServerNameGenerator ($zAttributesArray, $zFightersArray); 
    $data = array();
    $data['serverName'] = $serverName;
    return $data;
}
extract(page_controller());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
    <h1>Dragon Ball Z Servers</h1>
    <h3>Your Z Server Name is:
        <span>
            <?= $serverName; ?>
        </span>
    </h3>
</body>
</html>