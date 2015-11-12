<?php 

$zFighters = ['Goku', 'Piccolo', 'Krillin', 'Tien', 'Yamcha', 'Chaozu', 'Master Roshi', 'Yajirobe', 'Vegeta', 'Gohan', 'Goten', 'Gotenks', 'Trunks'];
$zAttributes = ['Strong-willed', 'Rude', 'Loyal', 'Courageous', 'Impressive', 'Powerful', 'Fast', 'Destructive', 'Tenacious', 'Mercilous', 'Noble', 'Hero', 'Ultimate', 'Devastating'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
    <h1>Dragon Ball Z Servers</h1>
    <ul>
        <?php foreach ($zFighters as $zFighter) {
            <li></php echo $zFighter; ?></li>
        <?php } ?>
    </ul>
</body>
</html>