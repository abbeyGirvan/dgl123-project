<?php

$servername = "localhost:3306";
$username = "n0201636_agirvan";
$password = "Ratt13theSt4r5";
$dbname = "n0201636_dgl123-projectM3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}