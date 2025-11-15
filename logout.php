<?php
$connect=new mysqli("localhost","root","","night");
session_start();
session_unset();
session_destroy();
header('Location: loginuser.php');
exit();
?>
