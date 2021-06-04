<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['password'];

// echo $a,$b,$c,$d;
$data="insert into employee(name,email,number,password)values('$a','$b','$c','$d')";
mysqli_query($conn,$data);

?>