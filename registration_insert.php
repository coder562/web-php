<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['roll'];
$e=$_POST['gender'];
$f=$_POST['DOB'];
$g=$_POST['password'];
$h=$_POST['subjects'];
$i=$_POST['semester'];

echo $a,$b,$c,$d,$e,$f,$g,$h,$i;
$data="insert into registration(name,email,phone,roll,gender,DOB,password,subjects,semester)values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
mysqli_query($conn,$data);
?>