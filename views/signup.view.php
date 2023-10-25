<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="styles.css" />

</head>

<body>
    <main>
        <?php require 'partials/login-header.php'; ?>
        <div class="content-wrap">
            <form action="signup" class="signup">
                <label for="first-name">first name</label>
                <input type="text" name="first-name" >
                <label for="last-name">last name</label>
                <input type="text" name="last-name">
                <label for="email">email address</label>
                <input type="text" name="email">
                <label for="password">password</label>
                <input type="text" name="password">
                <label for="confirm-password">confirm password</label>
                <input type="text" name="confirm-password">
                <input type="submit" class="log-submit" value="SIGN UP">
            </form>
        </div>
        <div class="content-wrap">
            <div class="lower-container">
                <p>already have an account?</p>
                <button><a href="signup.php">log in here</a></button>
            </div>
        </div>
    </main>

</body>

</html>