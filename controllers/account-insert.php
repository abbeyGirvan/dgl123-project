<?php

require 'db-connection.php';

// add single quote to start and end of data
$firstName = "'" . $_POST["first-name"] . "'";
$lastName = "'" . $_POST["last-name"] . "'";
$email = "'" . $_POST["email"] . "'";
$password = "'" . $_POST["password"] . "'";
$confirmPassword = "'" . $_POST["confirm-password"] . "'";

//echo '<script> alert("hello *'.$dueDate.'")</script>';

if ($password !== $confirmPassword) {
    echo '<script> alert("passwords do not match")</script>';
} else {

    // Insert record
    $sql = "INSERT INTO accounts(`firstname`, `surname`, `email`, `password`) VALUES($firstName, $lastName, $email, $password)";

    //display message if new reccord created or display error if not
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        echo '<script> alert("New record created successfully") </script>';
        //redirect to index.php after creating an account
        printf("<script>location.href='../index.php'</script>");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




$conn->close();


require 'functions.php';
