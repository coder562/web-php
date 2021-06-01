<?php

include "db_conn.php";
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

// echo $a,$b,$c;
echo $data="insert into pnform(name,email,number,address,gender,college,qualifications,branch,semester,internship)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
mysqli_query($conn,$data);

?>
