<?php require 'partials/head.php'; ?>


<body>
    <main>
        <?php require 'partials/header.php'; ?>
        <div class="content-wrap">
            <h2>Neil's ToDo List</h2>
        </div>
        <!--probably make this into a table setup rather than using grid (good css practice though)-->
        <div class="big-content">
            <div class="room-list">
                <h3>room</h3>
                <ul>
                    <li>kitchen</li>
                    <li>kitchen</li>
                   
                </ul>
            </div>
            <div class="tasks">
                <h3>task</h3>
                <ul>
                    <li>empty dishwasher</li>
                    <li>load dishwasher</li>
                 
                </ul>
            </div>
         
            <div class="status">
                <h3>status</h3>
                <input type="checkbox">
                <input type="checkbox">
               
            </div>
        </div>
    </main>
    <?php require 'partials/footer.php'; ?>
</body>

</html>