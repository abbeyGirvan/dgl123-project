<?php require 'partials/head.php'; ?>

<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap side-by-side">
            <div>
                <h2>YOU</h2>
                <div class="current-user">
                    <h3>Neil</h3> <!-- change to session-firstname -->
                    <h3>Josten</h3> <!-- change to session-lastname -->
                </div>
            </div>
            <div class="account-info">
                <h2>ACCOUNT INFO</h2>
                <h3>email:</h3>
                <p>njosten@palmetofoxes.com</p> <!-- change to session-email -->
                <h3>password</h3> 
                <p>*********</p> <!-- change to session-password -->
            </div>


        </div>
    </main>
    <?php require 'partials/footer.php'; ?>
</body>

</html>