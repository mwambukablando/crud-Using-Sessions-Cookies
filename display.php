<?php
 session_start();

if($_SESSION['names']){
}else{
    header('location:loginuser.php');
    
}

?>
<html>
    <head>
        <title>
            you know what it is
        </title>
    </head>
    <body>
      
      <h2>the user <?php echo $_SESSION['names'];?> is logged in</h2>
    
 
    <table border=2>
        <tr>
            <th>hoop_id</th>
            <th>names</th>
            <th>gender</th>
            <th>password</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?php
  
        $connect=new mysqli("localhost","root","","night");
        $sele=$connect->query("select * from curry ");
        while($row=mysqli_fetch_array($sele)){
            $hoop_id=$row['hoop_id'];
            $names=$row['names'];
            $gender=$row['gender'];
            $password=$row['password'];
            ?>
            <tr>
                <td><?php echo$hoop_id?></td>
                <td><?php echo$names?></td>
                <td><?php echo$gender?></td>
                <td><?php echo$password?></td>
                <td><a href="update.php?hoop_id=<?php echo $hoop_id?>">update</a></td>
                <td><a href="delete.php?hoop_id=<?php echo $hoop_id?>">delete</a></td>
            </tr>
            <?php
        }
        
        ?>
    </table>
  <a href="logout.php" > logout</a>
       </body>
</html>
