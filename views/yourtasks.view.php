<?php 

require 'partials/head.php'; 

require 'controllers/db-connection.php';


$sql = "SELECT rooms.`room-name`, tasks.`task-name`, tasks.`due-date`, tasks.`status`
    FROM tasks, rooms
    WHERE tasks.`account-id` = 1
    AND rooms.`id` = tasks.`room-id`
    ORDER BY 3 ASC;";

$result = $conn->query($sql);
?>


<body>
    <main>

        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <h2>Neil's ToDo List</h2>
        </div>

        <div class="content-wrap">
            <div class="room-list">
                <table class="output-table">
                    <tr>
                        <th>DUE</th>
                        <th>ROOM</th>
                        <th>TASK</th>
                        <th>STATUS</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>" .
                                "<td>" . $row["due-date"] . "</td" .
                                "<td>" . $row["room-name"] . "</td>" .
                                "<td>" . $row["task-name"] . "</td>" .
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