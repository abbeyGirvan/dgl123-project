<?php

require 'db-connection.php';

// add single quote to start and end of data
$taskName = "'".$_POST["task-name"]."'";
$room = "'".$_POST["room"]."'";
// $dueDate = "'".$_POST["due-date"]."'";

echo '<script> alert("hello *'.$room.'")</script>';

if ($room === "'kitchen'"){
    $roomId = 1;
} else if ($room === "'bathroom'"){
    $roomId = 2;
} else if ($room === "'living-room'") {
    $roomId = 3;
} else {
    $roomId = 4;
}

// Insert record
$sql = "INSERT INTO tasks(`room-id`, `task-name`, `account-id`) VALUES($roomId, $taskName, 1)";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo '<script> alert("New record created successfully") </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


require 'functions.php';
