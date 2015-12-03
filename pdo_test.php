<?php

// Use require to include db_connect.php.

// Echo the PDO connection status

require_once 'config.php';
require_once 'db_connect.php';


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// $query = 'CREATE TABLE users (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     email VARCHAR(240) NOT NULL,
//     name VARCHAR(50) NOT NULL,
//     PRIMARY KEY (id)
// )';

// $dbc->exec($query);