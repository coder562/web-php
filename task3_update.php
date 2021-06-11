<?php
$id=$_POST['id'];
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

$x=explode(',',$o);
$y=explode(',',$p);

$data="update task3 SET name='$a' , gender='$b' , address='$c' , latitude='$d' , longitude='$e' , zip='$f' , sales='$g' , price='$h' , area='$i' , size='$j' , bathroom='$k' , bedroom='$l' , reception='$m' , garage='$n' , features='$x' , city='$y' , property='$q' , home='$r' where id=$id";
mysqli_query($conn,$data);
header('Location:task3_display.php');

// echo $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r;
?>