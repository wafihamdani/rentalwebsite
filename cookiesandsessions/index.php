<?php
session_start(); //gets session id from cookies, or prepa
if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists 
?>
<a href="login.php">Login</a>
<?php
} else {
  echo "Hi, " . $_SESSION['login'];
?>
<a href="logout.php">Logout</a>
<?php 
}
?>