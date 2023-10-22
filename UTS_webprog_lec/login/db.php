<?php
define('DSN', 'mysql:host=localhost; dbname=taco');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO (DSN, DBUSER, DBPASS);
?>