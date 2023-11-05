<?php


//database connection code from 'PHP&MySQL' by Jon Ducket
$type     = 'mysql';                 // Type of database
$server   = 'localhost';             // Server the database is on
$db       = 'dgl123-project';        // Name of the database
$port     = '8889';                  // Port is usually 8889 in MAMP and 3306 in XAMPP
$charset  = 'utf8mb4';               // UTF-8 encoding using 4 bytes of data per character

$username = 'testuser';             // Enter YOUR username here
$password = 'badpassword';          // Enter YOUR password here

$options  = [                       // Options for how PDO works
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]; 

// DO NOT CHANGE ANYTHING BENEATH THIS LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN
