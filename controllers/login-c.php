<?php
session_start();

require 'db-connection.php';
require 'functions.php';

// add single quote to start and end of data

$email = "'" . $_POST["email"] . "'";
$password = "'" . $_POST["password"] . "'";

$sqlEmail = "SELECT * 
FROM accounts
WHERE `email` = $email;";

$sqlMatch = "SELECT * 
FROM accounts
WHERE `email` = $email AND `password` = $password;";

$sqlUser = "SELECT id
FROM accounts
WHERE email = $email;";




$resultEmail = $conn->query($sqlEmail);
$resultMatch = $conn->query($sqlMatch);
$resultUser  = $conn->query($sqlUser);

$userID = $resultUser->fetch_assoc();

$userID["id"];
//dd($userID["id"]);
$_SESSION['id'] = $userID["id"];



if ($resultEmail->num_rows < 1) {
    echo '<script> alert("no account found for this email")</script>';
    $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
    echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';
} else {
    if ($resultMatch->num_rows < 1) {
        echo '<script> alert("incorrect password")</script>';
        $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
        echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';
    } else {
        
        login();
        //session-firstname = sqlname; (do the same for last name, email, password)

        // redirect user to home page after logging in
        printf("<script>location.href='../index.php'</script>");
    }
}

$conn->close();
