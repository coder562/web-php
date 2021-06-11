<?php
include "db_conn.php";
$id=$_GET['a'];
$data="delete from task3 where id=$id";
mysqli_query($conn,$data);
header('Location:task3_display.php');
?>