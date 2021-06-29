<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from image where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	
</head>
<body>

	<form method="post" action="image_update.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $b['id'] ?>">
		Name:
		<input type="text" name="name" value="<?php echo $b['name'] ?>">
		<br>
		Image:
		<input type="file" name="image" value="<?php echo $b['image'] ?>">
		<img src="<?php echo $b['image']?>" style="width: 50px; height:50px; border-radius: 70px;">
		<br>
		<button >Submit</button>
	</form>

</body>
</html>