<?php
session_start();

require 'db-connection.php';
require 'functions.php';

$_SESSION['id'] = null;
session_destroy();
 printf("<script>location.href='../login.php'</script>");


?>