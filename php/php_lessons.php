<?php

// Write a function called sum that returns the sum of two numbers.
// Write a function called square the returns a number multiplied by itself.
// Write a function called sumSquares that takes in two numbers and returns the sum of each number squared.

// Using the array of states at https://gist.github.com/ryanorsinger/c313142b6e6a6edbe676,
// make a foreach that iterates across the states.

// if the state's value is "Texas", echo "YEEHAW"
// if the state's key is "DE", echo "I'm in delaware"

// now, iterate across the array of states
// echo out how many vowels are in each state's name.

// Function Sum of two numbers.
function sum($a,$b) {
    return $a + $b;
}

// Function Square of a number.
function square($a) {
    return $a * $a;
}

// Method 1: Function sumSquares takes sum of two numbers and sqaures them. 
function sumSquares($a,$b) {
    return ($a * $a) + ($b * $b);
} 

// Method 2: Function sumSquares takes sum of two numbers and sqaures them.
function sumSquares($a,$b) {
    return square($a) + square($b);
}

// Method 3: Function sumSquares takes sum of two numbers and sqaures them.
function sumSquares($a,$b) {
    $aSquared = square($a);
    $bSquared = square($b);
    return sum($aSquared,$bSquared); 
}

// Method 4: Function sumSquares takes sum of two numbers and sqaures them.
function sumSquares($x,$y) {
    return sum(square($x), square($y)); 
} 
echo "The sum of the squares of four and two is" . sumSquares(4,2);
echo '<br>';

$states = array(
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'PR' => 'Puerto Rico',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'VI' => 'US Virgin Islands',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming',
);

foreach ($states as $key => $state) {
    if($state == 'Texas') {
        echo "YEEHAW!";
    }
    if($key == 'DE') {
        echo "I\'m from Delaware.";
    }
    if($state == 'a','e','i','o','u') {
        echo 
    }
} 