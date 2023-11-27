<?php
require 'partials/head.php';
require 'controllers/db-connection.php';

$sql = "SELECT firstname, surname, email 
FROM accounts 
WHERE id = $_SESSION[id];";

$result = $conn->query($sql);

$info = $result->fetch_assoc()
?>

<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap side-by-side">
            <div>
                <h2>YOU</h2>
                <div class="current-user">
                    <h3>first name:</h3>
                    <p><?= $info["firstname"] ?></p>
                    <h3>surname:</h3>
                    <p><?= $info["surname"] ?></p> 
                </div>
            </div>
            <div class="account-info">
                <h2>ACCOUNT INFO</h2>
                <h3>email:</h3>
                <p><?= $info["email"] ?></p> <!-- change to session-email -->
                <h3>password</h3>
                <p>*********</p> <!-- change to session-password -->
            </div>


        </div>
    </main>
    <?php require 'partials/footer.php'; ?>
</body>

</html>