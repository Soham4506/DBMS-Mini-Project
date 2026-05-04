<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS student_db";
mysqli_query($conn, $sql);

// Select DB
mysqli_select_db($conn, "student_db");

// Create Table
$table = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    course VARCHAR(100),
    marks INT,
    contact VARCHAR(15)
)";

mysqli_query($conn, $table);

echo "✅ Database & Table Created Successfully!";
?>