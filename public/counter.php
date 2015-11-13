<?php 

function pageController()
{
    $counter = isset($_GET['count'])?$_GET['count']: 0;
    return array(
    'counter' => $counter
    );
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>
    <h2><?=$counter?></h2>
    <a href="counter.php?count=<?=$counter+1?>">Up</a>
    <a href="counter.php?count=<?=$counter-1?>">Down</a>
</body>
</html>