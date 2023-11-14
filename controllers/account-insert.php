<?php
require 'db-connection.php';
require 'functions.php';

// add single quote to start and end of data
$firstName = "'" . $_POST["first-name"] . "'";
$lastName = "'" . $_POST["last-name"] . "'";
$email = "'" . $_POST["email"] . "'";
$password = "'" . $_POST["password"] . "'";
$confirmPassword = "'" . $_POST["confirm-password"] . "'";


$sqlEmail = "SELECT * 
FROM accounts
WHERE `email` = $email;";

$resultEmail = $conn->query($sqlEmail);

// dd($resultEmail);



if ($resultEmail->num_rows >= 1) {
    echo '<script> alert("an account with this email already exists")</script>';
    $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
    echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';
} else {
    if ($password !== $confirmPassword) {
        echo '<script> alert("passwords do not match")</script>';
        $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
        echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';
    } else {
    
        // Insert record
        $sql = "INSERT INTO accounts(`firstname`, `surname`, `email`, `password`) VALUES($firstName, $lastName, $email, $password)";
    
        //display message if new reccord created or display error if not
        if ($conn->query($sql) === TRUE) {

            //echo "New record created successfully";
            echo '<script> alert("New record created successfully") </script>';

            login();
            $sqlAccount = "SELECT `id` FROM accounts WHERE `email` = $email;";
            $resultAccount = $conn->query($sqlAccount);

            $_SESSION['current_user'] = $resultAccount;

            //redirect to login.php after creating an account
            printf("<script>location.href='../login.php'</script>");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();



