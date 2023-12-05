<?php

// Database connection parameters
$driver = 'mysql';               // Database driver (e.g., mysql, postgresql)
$host = 'localhost';             // Database host (e.g., localhost)
$db_name = 'PHP_PROJEKT';         // Database name
$db_user = 'root';                // Database username
$db_pass = 'mysql';               // Database password
$charset = 'utf8mb4';             // Character set for the connection
// PDO options for database connection
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
// Attempt to establish a PDO database connection
try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
} catch (PDOException $i) {
    die("Error with connecting to database");
}

// At this point, $pdo is a valid PDO object representing the database connection

?>