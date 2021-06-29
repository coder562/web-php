<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];

// // echo $a,$b;
// echo "<pre>";
// print_r($b);
$files="upload/".$b;
move_uploaded_file($filename, $files);
$data="insert into image(name,image)values('$a','$files')";
mysqli_query($conn,$data);
?>