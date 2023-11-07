<?php
define('DSN', 'mysql:host=localhost; dbname=taco');
define('DBUSER', 'root');
define('DBPASS', '');

try {
    $db = new PDO(DSN, DBUSER, DBPASS);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>