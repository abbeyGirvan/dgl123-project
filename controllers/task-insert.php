<?php

require 'db-connection.php';

// add single quote to start and end of data
$taskName = "'" . $_POST["task-name"] . "'";
$room = "'" . $_POST["room"] . "'";
$dueDate = "'" . $_POST["due-date"] . "'";

echo '<script> alert("hello *' . $dueDate . '")</script>';

if ($room === "'kitchen'") {
    $roomId = 1;
} else if ($room === "'bathroom'") {
    $roomId = 2;
} else if ($room === "'living-room'") {
    $roomId = 3;
} else {
    $roomId = 4;
}

// Insert record
$sql = "INSERT INTO tasks(`room-id`, `task-name`, `account-id`, `due-date`) VALUES($roomId, $taskName, 1, $dueDate)";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo '<script> alert("New record created successfully") </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// go back to calling screen after 1 second
$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';


$conn->close();


require 'functions.php';
