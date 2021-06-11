<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['college'];
$c=$_POST['gender'];
$d=$_POST['education'];
// echo "<pre>";
// print_r($d);
$i=implode(',',$d);
// echo $i;
// echo $a,$b,$c,$d;
$data = "insert into form(name,college,gender,education)values('$a','$b','$c','$i')";
mysqli_query($conn,$data);

?>
<!-- implode-array to string conversion -->
<!-- explode- -->