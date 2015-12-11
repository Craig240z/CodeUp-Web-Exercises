<?php

class Input
{
    public static function notEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '') {
            return true;
        }
    }
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

    public static function getString($key, $min = 1, $max = 250)
    {
         // Check if value is a string
        if (!self::has($key)) {
            throw new OutOfRangeException('This string field must be filled!');
        } else if (!is_string($key)) {
            throw new DomainException('This must be a string!!');
        } else if (!is_numeric($min) or !is_numeric($max)) {
            throw new InvalidArgumentException('The field must be filled with numbers.');
        } else if (is_string($key) < is_numeric($min) or is_string($key) > is_numeric($max)) {
            throw new LengthException('The string is shorter than the minimum or longer than the maximun.');
        } 
        return ($key);
    }

    public static function getNumber($key, $min = 1, $max = 250)
    {
        // Check if value is a number
        if (!self::has($key)) {
            throw new InvalidArgumentException('This number field must be filled!');
        } else if (!is_numeric($key)) {
            throw new InvalidArgumentException('This must be a number!!');
        } else if (($key) < is_numeric($min) or ($key) > is_numeric($max)) {
            throw new RangeException('The number is less than the minimum or greater than the maximum.');
        } else {
            return ($key);
        }

    }

     public static function getDate($key)
    {
        // Check for correct date and or time
        $inputValue = self::get($key);
       try 
        {
            $dateTimeObject = New DateTime($inputValue);
        } catch (Exception $e) {
            throw new Exception("{$key} must be a valid date in the format of MM/DD/YYYY");
        }    
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
