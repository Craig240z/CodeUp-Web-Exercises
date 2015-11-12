<?php

function parseSalesReport($filename)
{
    $salesReportArray = array();
    $handle = fopen($filename, 'r');
    $contentString = fread($handle, filesize($filename));
    $contentString = trim($contentString);

    $arrayOfStrings = explode("\n", $contentString);
    $arrayOfStrings = trimTheKruft($arrayOfStrings);

    
    // var_dump($arrayOfStrings);
    function trimTheKruft($arrayOfStrings) {
        for($i = 0; $1 <= 0; $i++)
    }
    $kruft[0 - 12] = array_shift($arrayOfStrings);
    print_r($arrayOfStrings);

        foreach($salesReportArray as $row) {
    
    $columns = explode(',', $row);
    
    foreach($columns as $key => $cell) {
         echo $cell;
    }
}
sprintf(format)
// $stack = array("orange", "banana", "apple", "raspberry");
// $fruit = array_shift($stack);
// print_r($stack);
//         // foreach ($arrayOfStrings as $personContactInfoString) {
        //     $personInfoArray = explode('|', $personContactInfoString);


// $contentsArray = [
//     "bob, 2222222, bob@bob.com, 600 Navarro",
//     "jane, 3333333, jane@jane.com, 112 E. Pecan"
//     "JJ, 4444444, JJ@jj.com, 110 E. Houston"
// ];


// foreach($contentsArray as $row) {
    
//     $columns = explode(',', $row);
    
//     foreach($columns as $key => $cell) {
//          echo $cell;
//     }
// }


}
    var_dump(parseSalesReport('../data/report.txt'));