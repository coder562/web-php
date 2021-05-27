<?php
include "db_conn.php";
$u=$_POST['x'];
$p= $_POST['y'];
// echo $u,$p;
echo $data = "insert into student(username,password)values('$u','$p')";
mysqli_query($conn,$data);

?>