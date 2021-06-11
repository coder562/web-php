<?php
include "db_conn.php";
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['roll'];
$e=$_POST['gender'];
$f=$_POST['DOB'];
$g=$_POST['password'];
$h=$_POST['subjects'];
$i=$_POST['semester'];

echo $id,$a,$b,$c,$d,$e,$f,$g,$h,$i;
$data="update registration SET name='$a' , email='$b' , phone='$c' , roll='$d' , gender='$e' , DOB='$f' , password='$g' , subjects='$h' , semester='$i' where id=$id";
mysqli_query($conn,$data);
header('Location:registration_display.php');

?>