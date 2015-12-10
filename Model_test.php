<?php

// require_once 'Model.php';
require_once 'User.php';

$person = new User();
$person->email = 'craig@gmail.com';
$person->name = 'Craig Re';
$person->phone = '210-749-3819';
$person->address = '123 sesame st';
$person->city = 'New York';
$person->state = 'NY';
$person->zip = '98742';
$person->save();

$person = new User();
$person->email = 'alex_re_544@hotmail.com';
$person->name = 'Alexander Re';
$person->phone = '541-361-9146';
$person->address = '258 Winchester Ave';
$person->city = 'Reedsport';
$person->state = 'OR';
$person->zip = '97467';
$person->save();

$person = new User();
$person->email = 'sam_re_re@hotmail.com';
$person->name = 'Samantha Re';
$person->phone = '541-361-9562';
$person->address = '9826 Dull Knife Way';
$person->city = 'San Antonio';
$person->state = 'TX';
$person->zip = '78239';
$person->save();

// $users = User::all();
// var_dump($users);

// $users = User::find(3);
// var_dump($users);

$users = User::all();
var_dump($users);

$userToDelete = User::find(2);
$userToDelete->delete();

// 1. Ensure that the Model connects to the database
// 2. Scan or read the entire starting code.
// 3. Identify the easiest or quickest place to start
// 3.5 Identify problems or issues that I can put off or delay entirely
// - stack overflow everything
// 4. goto step 2 and repeat.