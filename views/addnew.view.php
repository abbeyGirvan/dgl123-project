<?php require 'partials/head.php'; ?>


</head>

<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <form class="create-task" action="controllers/task-insert.php" method="post">
                <div class="custom-input">
                    <label for="task-name">Task:</label>
                    <input type="text" id="task-name">
                </div>
                <div class="rooms">
                    <input type="radio" name="kitchen" id="kitchen">
                    <label for="kitchen">kitchen</label>
                    <input type="radio" name="bathroom" id="bathroom">
                    <label for="bathroom">bathroom</label>
                    <input type="radio" name="living room" id="living-room">
                    <label for="living-room">living room</label>
                    <input type="radio" name="other" id="other">
                    <label for="other">other</label>
                </div>
                
                <div class="date">
                    <label for="date">Due On or By:</label>
                    <input type="date">
                </div>
                <input class="btn" type="submit" value="CREATE">
            </form>
        </div>

    </main>
    <?php require 'partials/footer.php'; ?>
</body>

</html>