<?php require 'partials/head.php'; ?>


<body>
    <main>
        <?php require 'partials/landing.header.php'; ?>

        <div class="content-wrap">
            <form class="signup" action="controllers/account-insert.php" method="post">
                <label for="first-name">first name</label>
                <input type="text" name="first-name">

                <label for="last-name">last name</label>
                <input type="text" name="last-name">

                <label for="email">email address</label>
                <input type="text" name="email">

                <label for="password">password</label>
                <input type="text" name="password">

                <label for="confirm-password">confirm password</label>
                <input type="text" name="confirm-password">

                <a href="index.php"><input type="submit" class="log-submit" value="SIGN UP"></a><!-- needs to link to user-creation -->
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