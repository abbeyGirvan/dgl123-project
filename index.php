<?php
session_start();


$heading = 'Home';


if ($_SESSION['id'] != null) {
    require "views/index.view.php";
} else {
    printf("<script>location.href='../login.php'</script>");
}
