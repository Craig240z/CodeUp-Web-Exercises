// todo:
// Create an array of 4 names using literal array notation, in a variable called 'names'.
var names = ['jack', 'jill', 'mary', 'sue'];
// todo:
// Create a log statement that will log the number of elements in the names array.
console.log(names.length);

 /*function sayHi(name) {
    return 'Hello, ' + name;
}
*/

// todo:
// Create log statements that will print each of the names array elements individually.
for(var i = 0; i < names.length; i+=1) {
    console.log(names[i]);
}

/* for(var i = 0; i , maxlength; i+=1){
    console.log('The name at index ' + i + ' is ' + names[i]);
} */

//names.forEach(function (element, index, array) {
 //   console.log('The name at index ' + index + ' is ' + element);
//});

/* This is what console.log(names[1]):  does
console.log(names[0]);
console.log(names[1]);
console.log(names[2]);
console.log(names[3]);
console.log(names[4]); */

/* console.log('The first name is: ' + jack[0]);
console.log('The second name is: ' + name2[1]);
console.log('The third name is: ' + name3[2]);
console.log('The fourth name is: ' + name[3]); */


for(var i = 0; i < names.length; i+=1) {
    console.log('The name at index ' + i + ' is ' + names[i]);
}
/*
names.forEach(function (element, index, array) {
    console.log('The name at index ' + index +) ' is ' + element );
    console.log('The element at ' index + i + ' is ' + names[i]);
}

names.forEach(function (element, index, array) {

})

var tacos = ['picadillo', 'lengua', 'barbarcoa', 'breakfast'];

tacos.forEach(function (taco,index,array) {
    if(index > 0) {
        console.log('The last taco I ate was a ' + array[index -1]);
    }

    console.log('I am eating a ' + taco + ' taco');
})
*/
/* var names = ['jack', 'jill', 'mary', 'sue'];

for (var i = 0; 1 < names.length; i++) {
    console.log('The name at index ' + i + ' is: ' + names[i]);
}
*/