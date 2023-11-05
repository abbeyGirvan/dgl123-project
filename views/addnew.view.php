<?php require 'partials/head.php'; ?>


</head>

<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <form class="create-task" action="controllers/task-insert.php" method="post">
                <div class="custom-input">
                    <label for="task-name">Task:</label>
                    <input type="text" id="task-name" name="task-name">
                </div>
                <div class="rooms">
                    <label for="kitchen">kitchen</label>
                    <input type="radio" name="room" id="kitchen">

                    <label for="bathroom">bathroom</label>
                    <input type="radio" name="room" id="bathroom">

                    <label for="living-room">living room</label>
                    <input type="radio" name="room" id="living-room">

                    <label for="other">other</label>
                    <input type="radio" name="room" id="other">
                </div>
                
                <div class="date">
                    <label for="due-date">Due On or By:</label>
                    <input type="date" id="due-date" name="due-date">
                </div>
                <input class="btn" type="submit" value="CREATE">
            </form>
        </div>

    </main>
    <?php require 'partials/footer.php'; ?>
</body>

</html>