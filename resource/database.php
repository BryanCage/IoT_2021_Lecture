<?php

// Create variables for making a PDO Connection to your database
$host = 'your server ip address goes here';
$driver = 'mysql';
$db_name = 'your database name goes here';
$port = 3306;
$db_username = 'your database username goes here';
$db_password = 'your database password goes here';
$options = ['PDO::MYSQL_ATTR_INIT_COMMAND' => 'SET NAMES utf-8'];

// Set Database Resource Name
$dsn = "{$driver}:host={$host}; dbname={$db_name}; port={$port};";

// Create a new PDO (PHP Database Object)
try {
    $db_connection = new PDO($dsn, $db_username, $db_password, $options);
    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Database Connection Successful.";
} catch (PDOException $exception) {
//    echo "Failed to make Database Connection.";
}



?>
