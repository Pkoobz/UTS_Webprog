<?php
session_start();
//require_once('db.php');

if(!isset($_SESSION['username']) && 
   !isset($_SESSION['user_id'])){
    echo "You don't have access to this page";
}else{
}
?>

<?php
if(!isset($_SESSION['user_id'])){
?>
<a href="login.php">Login</a>
<?php
}else{
?>
<a href="logout.php">Logout</a>
<?php
}
?>