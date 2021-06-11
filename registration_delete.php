<?php
include "db_conn.php";
$id=$_GET['a'];
$data = "delete from registration where id=$id";
mysqli_query($conn,$data);
header('Location:registration_display.php');

?>