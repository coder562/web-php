

<?php
include "db_conn.php";
$id=$_GET['a'];
$data ="select * from student where id = $id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);
echo "<pre>";
print_r($b);

?>
<h1><?php echo $b['username'] ?></h1>
<h1><?php echo $b['password'] ?></h1>