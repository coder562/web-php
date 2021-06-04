<?php
include "db_conn.php";
$id=$_GET['id'];
$data="delete from employee where id=$id";
mysqli_query($conn,$data);
header('Location:employee_display.php');

?>