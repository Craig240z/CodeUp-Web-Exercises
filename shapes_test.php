<?php

require_once 'square.php';

$rectangle = new Rectangle(20,40);

echo 'The area of this rectangle is ' .$rectangle->area() .PHP_EOL;

$square = new Square(20);

echo 'The perimeter of this square is ' . $square->perimeter() .PHP_EOL;

