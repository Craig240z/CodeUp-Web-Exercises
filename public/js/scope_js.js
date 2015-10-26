
(function () {

    var myNameIs = 'Craigmeister'; 

        function sayHello(fname) {

   // console.log('Hello ' + fname);
   //       or
        return ('Hello ' + fname); 

        }

     var iffeVar = "I'm local to the IIFE.";   

console.log( sayHello(myNameIs) );

})();

(function () {

    var random = Math.floor((Math.random()*100)+1);

        function isOdd(number) {
        return (number % 2 !== 0) ? true : false;

        }



// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.
console.log(isOdd(random));

console.log(random);
})();