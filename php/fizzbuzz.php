<?php

for(int i = 1; i <= 100; ++i){
.int modThree = i % 3;
.int modFive = i % 5;
.if( modThree && modFive ){
..print i; // neither divisible by 3 nor 5
.}else{
..if( !modThree ) print "Fizz";
..if( !modFive ) print "Buzz";
.}
}