'use strict';
var numberButtons = document.getElementsByClassName("number");
var operatorButtons = document.getElementsByClassName("operator");
var firstinput = document.getElementById("firstinput");
var secondinput = document.getElementById("secondinput");
var thirdinput = document.getElementById("thirdinput");
var total = document.getElementById("total");
var equals = document.getElementById("equals");
var clear = document.getElementById("clear");
// var decimal = document.getElementById("decimal");

function displayClear(event) {
    firstinput.value = '';
    secondinput.value = '';
    thirdinput.value = '';
    total.value = '';
}

function displayEquals(event) {
    if (secondinput.value == "+") {
        total.value = parseFloat(firstinput.value) + parseFloat(thirdinput.value);
    } else if (secondinput.value == "-") {
        total.value = parseFloat(firstinput.value) - parseFloat(thirdinput.value);
    } else if (secondinput.value == "*") {
        total.value = parseFloat(firstinput.value) * parseFloat(thirdinput.value);
    } else if (secondinput.value == "/") {
        total.value = parseFloat(firstinput.value) / parseFloat(thirdinput.value);
    }
}

// function displayDecimal(event) {
    // if (secondinput.value == "+") + (thirdinput = ).toFixed(2) {

    // }
// }

function displayNumber(event) {
    // console.log(this);
    if (secondinput.value == '') {
        firstinput.value += this.getAttribute("data-value");
    } else {
        thirdinput.value += this.getAttribute("data-value");
    }
}

function displayOperator(event) {
        secondinput.value = this.getAttribute("data-value");
}

for(var i = 0; i < numberButtons.length; i++) {
    numberButtons[i].addEventListener("click", displayNumber, false);
    // console.log(numberButtons[i]);
}

for(var i = 0; i < operatorButtons.length; i++) {
    operatorButtons[i].addEventListener("click", displayOperator, false);
    // console.log(operatorButtons[i]);
}

    clear.addEventListener("click", displayClear, false)

    equals.addEventListener("click", displayEquals, false)

    // decimal.addEventListener("click", displayDecimal, false)