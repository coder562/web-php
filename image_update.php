<?php
include "db_conn.php";
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];

// // echo $a,$b;
// echo "<pre>";
// print_r($b);
 echo $files="upload/".$b;
move_uploaded_file($filename, $files);



// echo $id,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j;
// die;
// $data="update image SET name='$a' ,image='$files' where id=$id";
//  mysqli_query($conn,$data);
//  header('location:image_display.php');


?>