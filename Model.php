<?php

require_once 'config_user.php';


// class Model 
// {

//     // Array to store our key/value data
//     private $attributes = [];
//     protected static $table = 'table';

//     public static function getTableName()
//     {
//         return static::$table;
//     }

//     // Magic setter to populate $attributes array
//     public function __set($key, $value)
//     {
//         // Set the $name key to hold $value in $attributes
//         $this->attributes[$key] = $value;
//     }

//     // Magic getter to retrieve values from $attributes
//     public function __get($key)
//     {
//         // Check for existence of array key $name
//         if (array_key_exists($key, $this->attributes)) {
//             return $this->attributes[$key];
//         }

//         return null;
//     }

// }
require_once 'user_migration.php';

class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            // @TODO: Connect to database

            require 'db_connect.php';

            self::$dbc = $dbc;

        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
        $this->attributes[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        // @TODO: Ensure there are attributes before attempting to save
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
        if(!empty($this->attributes)) {
            if(isset($this->attributes['id'])) {
                $this->update($this->attributes['id']);
            } else {
                $this->insert();
            }
        }
    }

        // @TODO: Ensure that update is properly handled with the id key
    protected function update($id) 
    {
        $table = static::$table;

        $query = "UPDATE contacts SET 
         email = :email,
         name = :name,
         phone = :phone, 
         address = :address, 
         city = :city,
         state = :state, 
         zip = :zip 
         where id = :id";

        $stmt = self::$dbc->prepare($query);

        // var_dump($this->attributes);

        foreach ($this->attributes as $key => $value) {
            if ($key == 'id') {
                $id = (int) $value;
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            } else {    
                $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
            }
        } 

        $stmt->execute();
    }
        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id
        // @TODO: Use prepared statements to ensure data security

    protected function insert()
    {

        $table = static::$table;

        // echo $table;

        $query = "INSERT INTO $table (email, name, phone, address, city, state, zip)
                  VALUES (:email, :name, :phone, :address, :city, :state, :zip)";

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $stmt->bindValue(':address', $this->address, PDO::PARAM_STR);
        $stmt->bindValue(':city', $this->city, PDO::PARAM_STR);
        $stmt->bindValue(':state', $this->state, PDO::PARAM_STR);
        $stmt->bindValue(':zip', $this->zip, PDO::PARAM_STR);

        // echo $query;

        $stmt->execute();

    }

        // @TODO: You will need to iterate through all the attributes to build the prepared query



    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = "SELECT * FROM " . static::$table . " where id = :id";

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
        $query = "SELECT * FROM " . static::$table;

        $stmt = self::$dbc->prepare($query);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /*
     * Delete a record in a table
     */
    public function delete()
    {
        self::dbConnect();
        $id = $this->attributes['id'];

        $query = "DELETE FROM " . static::$table . " where id = :id";

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue('id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $id . 'was successfully deleted';
    }

} 