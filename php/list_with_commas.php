<?php

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark';

$physicistsArray = explode(', ', $famousFakePhysicists);

print_r($physicistsArray);

$famousFakePhysicists = implode(', ', $physicistsArray);


echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
