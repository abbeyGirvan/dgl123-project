<?php require 'partials/head.php'; ?>

<body>
    <main>
        <?php require 'partials/login-header.php'; ?>
<!-- 
    add some code to display account holder name and email here
    now going to add a form to create user profiles for as many people as the user wants
    REQUIRED to create one user profile for the account holder, else is extra
    basically goint to add data/link to table in user table describing profiles on the account.
-->
        <div class="content-wrap">
            <form action="create-profiles" class="create-profiles">
                <!-- <label for="first-name">first name</label>
                <input type="text" name="first-name">
                <label for="last-name">last name</label>
                <input type="text" name="last-name">
                <label for="email">email address</label>
                <input type="text" name="email">
                <label for="password">password</label>
                <input type="text" name="password">
                <label for="confirm-password">confirm password</label>
                <input type="text" name="confirm-password">
                <input type="submit" class="log-submit" value="SIGN UP"> -->
            </form>
        </div>
        <div class="content-wrap">
            <div class="lower-container">
                <p>already have an account?</p>
                <button><a href="login.php">log in here</a></button>
            </div>
        </div>
    </main>

</body>

</html>