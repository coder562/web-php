<?php
include "db_conn.php";
$a=$_POST['x'];
$b=$_POST['y'];
$c=$_POST['z'];
// echo $a,$b,$c;
echo $data="insert into task(name,email,city)values('$a','$b','$c')";
mysqli_query($conn,$data);

?>