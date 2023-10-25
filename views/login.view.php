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

    <form action="login">
        <label for="email">email address</label>
        <input type="text" name="email">
        <label for="password">password</label>
        <input type="text" name="password">
        <input type="submit">
    </form>
    <p>new to squeaky clean?<br>sign up for an account</p>
    <button>sign up here</button>
    </main>
    <?php require 'partials/footer.php'; ?>
</body>
</html>

