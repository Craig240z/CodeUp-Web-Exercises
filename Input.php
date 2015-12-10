<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
        // TODO: Fill in this function
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (Input::has($key)) {
            return $_REQUEST[$key];
        }
        return $default;
        // TODO: Fill in this function
    }

    public static function getString($key)
    {
         // Check if value is a string
        if (!self::has($key)) {
            throw new Exception('This string field must be filled!');
        } else if (!is_string(self::get($key))) {
            throw new Exception('This must be a string!!');
        } else {
            return self::get($key);
        }
        
    }

    public static function getNumber($key)
    {
        // Check if value is a number
        if (!self::has($key)) {
            throw new Exception('This number field must be filled!');
        } else if (!is_numeric(self::get($key))) {
            throw new Exception('This must be a number!!');
        } else {
            return self::get($key);
        }

    }

     public static function getdate($key)
    {
        // Check for correct date and or time
        $inputValue = self::get($key);
        $dateTimeObject = New DateTime($inputValue);
            
        return ($dateTimeObject);
    }

//      public static function validateDate($date)
//     {
//         $date = DateTime::createFromFormat('Y-m-d', $date);
//         return $date && $date->format('Y-m-d') == $date;
// }
    // }
    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
