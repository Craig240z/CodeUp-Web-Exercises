<?php 
  
function inputHas($key) {
    return isset($_REQUEST[$key]);
}

function inputGet($key) {
    if (inputHas($key)) {
        return escape($_REQUEST[$key]); 
    } 
    return null;
}

function escape($input) {
    $input = htmlspecialchars(strip_tags($input));
    return $input;
}
?>
