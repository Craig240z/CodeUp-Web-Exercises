<?php

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $famousFakePhysicists);


function humanizedList($physicistsArray, $sort = false)  {
    if ($sort) {
        sort($physicistsArray); 
    }
    $name = 'and ' . array_pop($physicistsArray);
    array_push($physicistsArray, $name);
    $famousFakePhysicists = implode(', ', $physicistsArray);
    return $famousFakePhysicists;
}

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";