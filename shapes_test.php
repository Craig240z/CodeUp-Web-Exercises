<?php

require_once 'square.php';

$rectangle = new Rectangle(20,40);

echo $rectangle->area() .PHP_EOL;

$square = new Square(20,20);

echo $square->perimeter() .PHP_EOL;

