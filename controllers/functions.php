<?php

function signedIn(/*cookie value of signed in firstname? */) {
    //if has value !null in cookie for firstname, continue on  
    //else redirect page to log-in page
}


//from 'PHP&MySQL' by JON DUCKETT
function pdo(PDO $pdo, string $sql, array $arguments = null)
{
    if (!$arguments) {                   // If no arguments
        return $pdo->query($sql);        // Run SQL and return PDOStatement object
    }
    $statement = $pdo->prepare($sql);    // If arguments prepare statement
    $statement->execute($arguments);     // Execute statement
    return $statement;                   // Return PDOStatement object
}


//from Laracast videos 'die and dump'
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}