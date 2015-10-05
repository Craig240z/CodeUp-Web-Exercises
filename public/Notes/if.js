var name = 'Letty';

if(name === 'Letty') {
    var message = 'Hi Letty';
} else if(name === 'Ryan'){
    var message = 'Hi Ryan';
} else {
    var message = 'Howdy ' + name;
}


var name = 'Letty';
var message = '';

if(name === 'Letty') {
    message = 'Hi Letty';
} else if(name === 'Ryan'){
    message = 'Hi Ryan';
} else {
    message = 'Howdy '  + name;
}

console.log(message);

var name = 'Craig';
var message = '';

//Ternary
message = (name -- 'Craig') ? 'Hi Craig' : 'Hell Not-Craig';

console.log(message);