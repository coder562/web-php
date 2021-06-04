<?php
include "db_conn.php";
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['address'];
$e=$_POST['gender'];
$f=$_POST['college'];
$g=$_POST['qualifications'];
$h=$_POST['branch'];
$i=$_POST['semester'];
$j=$_POST['internship'];

echo $id,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j;
// die;
$data="update pnform SET name='$a' , email='$b' , number='$c' , address='$d' , gender='$e' , college='$f' , qualifications='$g', branch='$h' , semester='$i' , internship='$j' where id=$id";
 mysqli_query($conn,$data);
 header('location:pnform_display.php');


?>