<?php

// function parseContacts($filename)
// {
//     $contacts = array();

//     // todo - read file and parse contacts

//     return $contacts;
// }

// var_dump(parseContacts('contacts.txt'));

$filename = 'contacts.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filename($filename));
echo $contents;
fclose($handle;)