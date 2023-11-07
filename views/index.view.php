<?php

require 'partials/head.php';
// require 'Database.php';
// require 'functions.php';
require 'controllers/db-connection.php';


$sql = "SELECT rooms.`room-name`, tasks.`task-name`, tasks.`due-date`, tasks.`status`
    FROM tasks, rooms
    WHERE tasks.`account-id` = 1
    AND rooms.`id` = tasks.`room-id`
    ORDER BY 1,2 ASC;";

$result = $conn->query($sql);


//$taskList = pdo($pdo, $sql)->fetchAll();
//$statement = $pdo->query($sql);

//$members   = $statement->fetchAll();

/*
<?php foreach ($members as $member) { ?>
                <p>
                    <?= html_escape($member['status']) ?>
                    <?= html_escape($member['room-name']) ?>
                    <?= html_escape($member['task-name']) ?>
                    <?= html_escape($member['due-date']) ?>
                </p>

                <?php foreach ($members as $member) { ?>
                    <ul>
                        <li><?= html_escape($member['room-name']) ?></li>
                        <li><?= html_escape($member['task-name']) ?></li>
                        <li><?= html_escape($member['due-date']) ?></li>
                        <li><?= html_escape($member['status']) ?></li>
                    </ul>
                <?php } ?>
            <?php } ?>
*/

?>


<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <h2>All Tasks</h2>
        </div>
        <!--probably make this into a table setup rather than using grid (good css practice though)-->


        <div class="content-wrap">
            <div class="room-list">
                <table>
                    <tr>
                        <th>ROOM</th>
                        <th>TASK</th>
                        <th>DUE</th>
                        <th>STATUS</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>" .
                                "<td>" . $row["room-name"] . "</td>" .
                                "<td>" . $row["task-name"] . "</td>" .
                                "<td>" . $row["due-date"] . "</td" .
                                "<td>" . $row["status"] . "</td" .
                                "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
    </main>
    <?php require 'partials/footer.php'; ?>
</body>

</html>