<?php
// db.php
// DB Credentials
define('DSN', 'mysql:host=localhost; dbname=task_tracker');
define('DBUSER', 'root');
define('DBPASS', '');

// 1.
$db = new PDO (DSN, DBUSER, DBPASS);
?>