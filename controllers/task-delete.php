<?php

require 'db-connection.php';
require 'functions.php';

// add single quote to start and end of data
$taskID = "'" . $_POST["task-id"] . "'";



// delete record
$sql = "DELETE FROM `tasks` 
        WHERE `tasks`.`id` = $taskID";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo '<script> alert("record deleted!") </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// go back to calling screen after 1 second
$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';


$conn->close();
