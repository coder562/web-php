<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['gender'];
$c=$_POST['address'];
$d=$_POST['latitude'];
$e=$_POST['longitude'];
$f=$_POST['zip'];
$g=$_POST['sales'];
$h=$_POST['price'];
$i=$_POST['area'];
$j=$_POST['size'];
$k=$_POST['bathroom'];
$l=$_POST['bedroom'];
$m=$_POST['reception'];
$n=$_POST['garage'];
$o=$_POST['features'];
$p=$_POST['city'];
$q=$_POST['property'];
$r=$_POST['home'];

$x=implode(',',$o);
$y=implode(',',$p);




// echo $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$x,$y;
$data="insert into task3(name,gender,address,latitude,longitude,zip,sales,price,area,size,bathroom,bedroom,reception,garage,features,city,property,home)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$q','$r','$x','$y')";
mysqli_query($conn,$data);
 ?>