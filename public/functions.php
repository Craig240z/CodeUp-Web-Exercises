<?php 
  
function inputHas($key) {
    return isset($_REQUEST[$key]);
}

function inputGet($key) {
    if (inputHas($key)) {
        return $_REQUEST[$key]; 
    }
}

function escape($input) {
    $input = htmlspecialchars(strip_tags($input));
    return $input;
}
?>
