<?php

require_once 'config_parks.php';
require_once 'db_connect.php';

// Create the query and assign to var
$query = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($query);

$query ='CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    park VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established date NOT NULL,
    area_in_acres double NOT NULL,
    description TEXT NOT NULL,
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