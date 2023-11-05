<?php

/*function signedIn(/*cookie value of signed in firstname? ) {
    //if has value !null in cookie for firstname, continue on  
    //else redirect page to log-in page
}*/

function insert() {
    
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

// FORMATTING FUNCTIONS
function html_escape($text): string
{
    // Next line is an update for PHP 8.1 see https://phpandmysql.com/updates/passing-null-to-string-functions/
    $text = $text ?? ''; // If the value passed into function is null set $text to a blank string

    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false); // Return escaped string
}


//from Laracast videos 'die and dump'
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}