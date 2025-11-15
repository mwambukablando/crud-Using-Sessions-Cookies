<html>
    <head>
        <title>
            login
        </title>
    </head>
    <body><form action="" method="POST">
           
            names:<br><input type="text" name="names" placeholder="names"><br>
               password:<br><input type="text" name="password" placeholder="password"><br><br>
            <button name="login">login</button>
        </form>
        <a href="insert.php">create an account</a>
    </body>
</html>


<?php
$connect=new mysqli("localhost","root","","night");
if(isset($_POST['login'])){
    $names=$_POST['names'];
    $password=$_POST['password'];
    $sele=mysqli_query($connect,"SELECT * FROM curry where names='$names' AND password='$password'");
    $num = mysqli_num_rows($sele);
    if($num>0){
        session_start();
        $_SESSION['names'] = $_POST['names'];
        setcookie("names", $names, time() + (86400 * 30), "/");
        header("location:display.php");
    }
    else{
        echo "you are doomed";
    }
}
?>

