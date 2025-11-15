
<?php
$connect=new mysqli("localhost","root","","night");
if(isset($_POST['submit'])){
    $hoop_id=$_POST['hoop_id'];
    $names=$_POST['names'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $insert=$connect->query("INSERT INTO curry SET hoop_id='$hoop_id',names='$names',gender='$gender',password='$password'");
    if($insert){
        
        echo "the user inserted";
        header("location:display.php");
    }
    else{
        echo "user not inserted";
    }
}
?>
<html>
    <head>
        <title>
            insert
        </title>
    </head>
    <body>
        
        <form action="" method="POST">
            hoop_id:<br><input type="number" name="hoop_id" placeholder="hoop_id"><br>
            names:<br><input type="text" name="names" placeholder="names"><br>
            gender:<br><input type="text" name="gender" placeholder="gender"><br>
               password:<br><input type="password" name="password" placeholder="password"><br><br>
            <button name="submit">submit</button>
        </form>
    </body>
</html>