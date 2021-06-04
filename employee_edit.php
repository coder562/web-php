<?php
include "db_conn.php";
$id=$_GET['id'];
$data = "select * from employee where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" action="employee_update.php">
		<input type="text" name="id" value="<?php echo $b['id'] ?>">
		Name:
		<input type="text" name="name" value="<?php echo $b['name'] ?>">
		<br>
		Email:
		<input type="email" name="email" value="<?php echo $b['email'] ?>">
		<br>
		Number:
		<input type="number" name="number" value="<?php echo $b['number'] ?>">
		<br>
		Password:
		<input type="password" name="password" value="<?php echo $b['password'] ?>">
		<br>
		<button class="btn btn-info">Update</button>
	</form>

</body>
</html>