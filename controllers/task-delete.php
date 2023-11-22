<?php

require 'db-connection.php';
require 'functions.php';

// add single quote to start and end of data
$status = "'" . $_POST["status-opt"] . "'";

if ($_POST["delete"] != null) {
    $delete = "'" . $_POST["delete"] . "'";
} else {
    //do nothing!
}

$taskID = "'" . $_POST["task-id"] . "'";



// update record
$sql = "UPDATE `tasks`
SET `status` = $status
WHERE `id` = $taskID;";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo '<script> alert("Record updated :)") </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// go back to calling screen after 1 second
$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';


$conn->close();
