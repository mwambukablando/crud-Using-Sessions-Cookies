<?php
$connect=new mysqli("localhost","root","","night");
session_start();
session_destroy();
header('Location: loginuser.php');
session_stop();
?>
