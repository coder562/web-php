<?php

include "db_conn.php";
$a=$_POST['p'];
$b=$_POST['r'];
$c=$_POST['s'];
$d=$_POST['t'];
$e=$_POST['u'];
$f=$_POST['v'];

// echo $a,$b,$c;
echo $data="insert into task2(name,city,phone,email,address,college)values('$a','$b','$c','$d','$e','$f')";
mysqli_query($conn,$data);

?>
