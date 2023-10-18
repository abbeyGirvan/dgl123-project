<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css" />

</head>

<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <h2>All Tasks</h2>
        </div>
        <!--probably make this into a table setup rather than using grid (good css practice though)-->
        <div class="big-content">
            <div class="room-list">
                <h3>room</h3>
                <ul>
                    <li>kitchen</li>
                    <li>kitchen</li>
                    <li>bathroom</li>
                    <li>living room</li>
                </ul>
            </div>
            <div class="tasks">
                <h3>task</h3>
                <ul>
                    <li>empty dishwasher</li>
                    <li>load dishwasher</li>
                    <li>clean shower</li>
                    <li>sweep floors</li>
                </ul>
            </div>
            <div class="assign">
                <h3>assigned to</h3>
                <ul>
                    <li>Neil</li>
                    <li>Neil</li>
                    <li>Andrew</li>
                    <li>Renee</li>
                </ul>
            </div>
            <div class="status">
                <h3>status</h3>
                <div><input type="checkbox">Oct 20</div>
                <div><input type="checkbox">Oct 20</div>
                <div><input type="checkbox">Oct 20</div>
                <div><input type="checkbox">Oct 20</div>
            </div>
        </div>
    </main>

</body>

</html>