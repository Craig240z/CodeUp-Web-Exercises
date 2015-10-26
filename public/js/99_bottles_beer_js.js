'use strict'
    

// if there are any beers
// n "bottles of beer on wall... take down and pass it around"
// if ther is only one beer
// "1 bottle of beer on the wall"
//  if there are no bottles
// "someone needs to go to the store"


var number = 99;

while(number >= 1) {

    if(number == 1) {
        console.log(number + ' bottle of beer on the wall. Take one down, pass it around');
    // number = number - 1;
    } else {
        console.log(number + ' bottles of beer on the wall. Take it down and pass it around');
    }

    number -= 1;
}

console.log('No bottles of beer. Someone goto the store');
console.log(number);



/////

 //for(var number = 99; number >= 1; number -=1) {

//    if(number >1) {
//        console.log(number + ' bottles of beer on the wall. Take one down, pass if around.');
//   } else {
//       console.log(number + ' bottles of beer on the wall. Take it down and pass it around');
//    }
// }
// console.log('No bottles of beer. Someone goto the store');
/////

//var number = 99

//do { 
//    if(number . 1) {
//        console.log(number + 'bottles of beer on the wall');
//    } else {
//        console.log(number + ' bottle of beer on the wall. It\'s our last bottle of beer');
//    }

//    number--;

//} while (number >= 1);

//console.log('No mas');
