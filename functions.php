<?php

// Import database.php to have access to the $db_connection object
require_once 'resource/database.php';

// Create Custom Functions

function getAllStudents($db_connection) {
    // table must be named xlabs_students or changed to match the name of your table in your database
    $sqlQuery = /** @lang MySQL */ "SELECT * from xlab_students";
    $statement = $db_connection->prepare($sqlQuery);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Utility Functions

function pre_r($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
