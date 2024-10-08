<?php

$host = "localhost";// Define the database host, usually 'localhost' for local development

$user = "root";// Define the database username, typically 'root' for local MySQL installations

$password = "";// Define the password for the database user; empty string for default root user

$dbname = "guban2";// Define the name of the database to connect to

// Create a Data Source Name (DSN) string for the PDO connection, specifying the host and database name
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);// Create a new PDO instance (PHP Data Object) for database interaction

$pdo->exec("SET time_zone = '+08:00';");// Set the time zone for the database connection to UTC+8:00

?>
