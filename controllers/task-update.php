<?php

require 'db-connection.php';

// add single quote to start and end of data
$check = "'" . $_POST["check"] . "'";



if ($check === "done") {
    $updated = 'not done';
} else {
    $updated = 'done';
}

// update record
$sql = "UPDATE `tasks`
SET `status` = $updated
WHERE `id` = $;";


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
