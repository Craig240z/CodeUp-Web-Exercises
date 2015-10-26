'use strict'

// # Area of rectangle

// # Area of triangle

// # Area of circle

// # Perimeter of circle

// # Area of trapezoid

// #

    var side1 = 8;
    var side2 = 9;
    var side3 = 15;

    function areaOfRectangle(side1, side2)
    {
        returnside1 * side2;
    }

    function areaOfRightTriangle(base, height)
    {
        return (base * height) / 2;
    }

    function areaOfShadedArea(area1, area2) {
        return area1 - area2;
    }

    function areaOfShadedArea2(base1, base2, height) {
        return (( base1 * base2 ) / 2) * height;
    }
 
 var area1 = areaOfRectangle(side1, side3);
 var area2 = areaOfRightTriangle(side1, side2);
 console.log(area1);
 console.log(area2);
 console.log(areaOfShadedArea(area1, area2));
 console.log(areaOfShadedArea(side3, (side3, side2), side1));