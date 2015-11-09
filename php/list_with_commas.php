<?php

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $famousFakePhysicists);

$name = 'and ' . array_pop($physicistsArray);

array_push($physicistsArray, $name);

$famousFakePhysicists = implode(', ', $physicistsArray);

print_r($physicistsArray);



echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

function humanizedList($physicistsArray) {

}
   // Your solution goes here!

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = [];

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>