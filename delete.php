
<?php
$connect=new mysqli("localhost","root","","night");
if(isset($_GET['hoop_id'])){
    $hoop_id=$_GET['hoop_id'];
    $delete=$connect->query("DELETE FROM curry where hoop_id='$hoop_id'");
    if($delete){
        header("location:nsert.php");
    }
}
?>