

<?php
$connect=new mysqli("localhost","root","","night");
if(isset($_GET['hoop_id'])){
    $hoop_id=$_GET['hoop_id'];
    $sele=$connect->query("select * from curry where hoop_id='$hoop_id' ");
    while($row=mysqli_fetch_array($sele)){
        $names=$row['names'];
        $gender=$row['gender'];
        $password=$row['password'];
    }
}
?>


<html>
    <head>
        <title>
            update
        </title>
    </head>
    <body>
        <form action="" method="POST">
            names:<input type="text" name="names" value="<?php echo $names?>"><br>
            gender:<input type="text" name="gender"  value="<?php echo $gender?>"><br>
            password:<input type="password" name="password"  value="<?php echo $password?>"><br>
            <button name="update"> update</button>
        </form>
    </body>
</html>
<?php
if(isset($_POST['update'])){
    $names=$_POST['names'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $upd=$connect->query("UPDATE curry set names='$names',gender='$gender' ,password='$password' where hoop_id=$hoop_id");
    if($upd){
        header("location:nsert.php");
    }
}

?>