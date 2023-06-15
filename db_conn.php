<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esther_db";

// Create database connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === false) {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Create the projects table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS projects (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(255) NOT NULL,
    description TEXT
)";
if ($conn->query($sql) === false) {
    die("Error creating projects table: " . $conn->error);
}

// Create the skills table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS skills (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    skill VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === false) {
    die("Error creating skills table: " . $conn->error);
}

// Create the contacts table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT
)";
if ($conn->query($sql) === false) {
    die("Error creating contacts table: " . $conn->error);
}

// Return the database connection
return $conn;
?>