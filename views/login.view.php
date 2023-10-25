<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css" />

</head>

<body>
    <main>
        <?php require 'partials/login-header.php'; ?>

        <div class="content-wrap">
            <form action="login" class="login">
                <label for="email">email address</label>
                <input type="text" name="email">
                <label for="password">password</label>
                <input type="text" name="password">
                <input type="submit" class="log-submit" value="LOG IN">
            </form>
        </div>
        
        <div class="content-wrap">
            <div class="lower-container">
                <p>new to squeaky clean?<br>sign up for an account</p>
                <button><a href="signup.php">sign up here</a></button>
            </div>
        </div>
    </main>

</body>

</html>