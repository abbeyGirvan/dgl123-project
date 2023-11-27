<header>
    <nav>
        <div class="content-wrap">
            <div class="container">
                <div>
                    <form action="../controllers/logout.php" method="post">
                        <input type="submit" value="LOGOUT">
                    </form>
                </div>
                <div>
                    <a href="index.php">Home List</a>
                    <a href="yourtasks.php">Impending Doom</a>
                    <a href="addnew.php">Add a Task</a>
                    <a href="account.php">Account</a>
                </div>
            </div>
    </nav>
    <div class="content-wrap">
        <h1><?= $heading ?></h1>
    </div>

</header>