<?php

require_once 'config_user.php';
require_once 'db_connect.php';

// Create the query and assign to var
$query = 'DROP TABLE IF EXISTS contacts';
$dbc->exec($query);

$query ='CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(250) NOT NULL,
    name VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(150) NOT NULL,
    city VARCHAR(150) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
)';
// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

// After the DROP TABLE command, add another exec() to create the table national_parks with the following fields:

// id (primary key, auto increment)

// name

// location

// date_established (date)

// area_in_acres (double)

// Run this file using php park_migration.php.