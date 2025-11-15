<?php
$connect=new mysqli("localhost","root","","night");
session_start();
session_destroy();
setcookie("names","", time() - 3600,"/");

header('Location: loginuser.php');



?>
