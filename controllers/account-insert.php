<?php

require 'db-connection.php';

// add single quote to start and end of data
$firstName = "'" . $_POST["first-name"] . "'";
$lastName = "'" . $_POST["last-name"] . "'";
$email = "'" . $_POST["email"] . "'";
$password = "'" . $_POST["password"] . "'";
$confirmPassword = "'" . $_POST["confirm-password"] . "'";

//echo '<script> alert("hello *'.$dueDate.'")</script>';


    // Insert record
    $sql = "INSERT INTO accounts(`firstname`, `surname`, `email`, `password`)
VALUES($firstName, $lastName, $email, $password)";



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
