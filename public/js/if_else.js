"use strict";

// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list
var message;

console.log('Random color chosen is ' + randomColor);
console.log('My favorite color is ' + favorite);

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if(randomColor == 'red') {
    message = 'Roses are red';
} else if (randomColor == 'orange') {
    message = 'Orange is the color of Trump\'s hair';
} else if (randomColor == 'yellow') {
    message = 'yellow is the color of my true love\'s hair';
} else if (randomColor == 'green') {
    message = 'greenthumb';
} else if (randonColor == 'blue') {
    message = 'My eyes are blue';
} else {
    message = 'I don\'t know anything about that color';
}

console.log(message);

// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
// (condition) ? "then" : "else";

message = (randomColor == favorite) ? "Random color matches, YAY!" : "No Match";
console.log(message);