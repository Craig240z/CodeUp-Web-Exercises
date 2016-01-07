<?php

// Step 1. Do the following drills & exercises in PHP.
// Step 2. Commit your answers to github and send me the link. Call the file "drills.php" or something similar.
// Step 3. Don't forget to go into `vagrant ssh` and do `php -a` if you need a PHP console for rapid testing out of ideas.
// Step 4. Don't forget to use PHP's internal functions. They make your tasks easier!
// Step 5. If you're stuck, Google the heck out of stuff and search StackOverflow for solutions.


// Write a function that takes in a number and returns the number multiplied by itself.
// Make a function that takes in a string and returns it capitalized. If the input is not a string, return false.
// Make a function that takes in a string and returns it lowercased. If the input is not a string, return false.
// Write a function called isVowel that takes in a single character and returns true if the character is a vowel, false if not.
// Write a function called countVowels that takes in a string and returns the number of vowels in the string.

function square($number) {
    $square = $number * $number;
    return $square;
} 
echo square(7);
// 

function upperCase($string) {
    if(!is_string($string))
        return false;
}
    return strtoupper($string);

    echo upperCase([]);
    echo upperCase("foo");

// 

function lowerCase($string) {
    if(!is_string($string))
        return false;
}
    return strtolower($string);

    echo lowerCase([]);
    echo lowerCase("FOO");

// 

