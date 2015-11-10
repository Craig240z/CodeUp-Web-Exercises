<?php

function parseContacts($filename)
{
        $contactsArray = array();

        $handle = fopen($filename, 'r');
        $contentString = fread($handle, filesize($filename));
        $contentString = trim($contentString);

        $arrayOfStrings = explode("\n", $contentString);

        foreach ($arrayOfStrings as $personContactInfoString) {
            $personInfoArray = explode('|', $personContactInfoString);
            $name = $personInfoArray[0];
            $phoneNumber = $personInfoArray[1];
            $areaCode = substr($phoneNumber, 0, 3);
            $middle = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, -4); 

            $contactsArray[] = [
                "name" => $name,
                "number" => $areaCode . "-" . $middle . "-" . $lastFour
            ]; 
        }
        fclose($handle);
        $contactsArray[] = $contactsArray;
}
// {
// function addDashessToPhoneNumber($phoneNumber)
// {
//     $areaCode = substr($phoneNumber, 0, 3);
//     $middle = substr($phoneNumber, 3, 3);
//     $lastFour = substr($phoneNumber, -4); 
//     return $areaCode . "-" . $middle . "-" . $lastFour;
// }

        // return $contactsArray;
// }
var_dump(parseContacts('../data/contacts.txt'));
