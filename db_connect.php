<?php

// Create a PDO instance and assign it to the variable $dbc.

// Make sure that instance will use exceptions rather than failing silently.

// Configure your connection to point to the employees database.

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);