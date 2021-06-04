<?php
include "db_conn.php";
$id=$_GET['a'];
$data="delete from pnform where id=$id";
mysqli_query($conn,$data);
header('location:pnform_display.php');

?>