<?php

require 'partials/head.php';
// require 'Database.php';
// require 'functions.php';
require 'controllers/db-connection.php';


$sql = "SELECT rooms.`room-name`, tasks.`task-name`, tasks.`due-date`, tasks.`status`, tasks.`id`
    FROM tasks, rooms
    WHERE tasks.`account-id` = 1 /* change number to session-firstname */
    AND rooms.`id` = tasks.`room-id`
    ORDER BY 1,2 ASC;";

$result = $conn->query($sql);

?>


<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <h2>To-Do List by Room</h2>
        </div>
        <!--probably make this into a table setup rather than using grid (good css practice though)-->


        <div class="content-wrap">
            <div class="room-list">
                <table class="output-table">
                    <tr>
                        <th>ROOM</th>
                        <th>TASK</th>
                        <th>DUE</th>
                        <th>STATUS</th>
                        <th>UPDATE</th>
                        <th>SUBMIT</th>
                        <th>DELETE</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr> 
                            <form class='update-task' action='controllers/task-update.php' method='post'>" .
                                "<td>" . $row["room-name"] . "</td>" .
                                "<td>" . $row["task-name"] . "</td>" .
                                "<td>" . $row["due-date"] . "</td>" .
                                "<td>" . $row["status"] . "</td>" .
                                "<td> 
                                    <select name='status-opt' id='status-opt'>
                                        <option value='not-done'>not done</option>
                                        <option value='in-progress'>in progress</option>
                                        <option value='stuck'>stuck</option>
                                        <option value='done'>done</option>
                                    </select>
                                </td>
                                <td>
                                    <input class='btn' type='submit' value='SUBMIT CHANGES'>
                                </td>" .
                                "<input type='hidden' name='task-id' id='task-id' value='".$row["id"]."'". ">" .
                                "</form>" .
                                "<form class='delete-task' action='controllers/task-delete.php' method='post'>
                                    <td>
                                        <input class='btn--delete' type='submit' value='DELETE'> 
                                    </td>
                                <input type='hidden' name='task-id' id='task-id' value='".$row["id"]."'". ">
                                </form>".
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