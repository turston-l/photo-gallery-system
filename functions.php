<?php
function pdo_connect_mysql() {
    // The below variables should reflect your MySQL credentials
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phpgallery';
    try {
        // Connect to MySQL using the PDO extension
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and output the error.
    	exit('Failed to connect to database!');
    }
}