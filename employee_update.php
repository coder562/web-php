<?php
include "db_conn.php";
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['password'];

echo $id,$a,$b,$c,$d;
$data = "update employee SET name='$a' , email='$b' , number='$c' , password='$d' WHERE id=$id";
mysqli_query($conn,$data);
header('Location:employee_display.php');
?>