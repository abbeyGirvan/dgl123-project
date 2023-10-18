<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create a task</title>
    <link rel="stylesheet" href="styles.css" />

</head>

<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <form class="create-task" action="">
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
                <div class="users">
                    <input type="radio" name="neil" id="neil">
                    <label for="neil">neil</label>
                    <input type="radio" name="andrew" id="andrew">
                    <label for="andrew">andrew</label>
                    <input type="radio" name="living room" id="living-room">
                    <label for="nicky">nicky</label>
                </div>
                <div class="date">
                    <label for="date">Due On or By:</label>
                    <input type="date">
                </div>
                <input class="btn" type="submit" value="CREATE">
            </form>
        </div>

    </main>

</body>

</html>