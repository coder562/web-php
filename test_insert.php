<?php
include "db_conn.php";
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['email'];
$d=$_POST['phone'];
$e=$_POST['address'];
$f=$_POST['pincode'];

echo $data="insert into test(username,password,email,phone,address,pincode)values('$a','$b','$c','$d','$e','$f')";
mysqli_query($conn,$data);


?>