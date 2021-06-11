<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="conatiner">
		<table class="table table-bordered">
			<h1 class="bg-info text-center">Registration Data Display</h1>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
			</tr>
			<?php
			include "db_conn.php";
			$data = "select * from registration";
			$result=mysqli_query($conn,$data);
			while($a=mysqli_fetch_array($result)){
				// echo "<pre>";
				// print_r($a);
			?>
			<tr>
				<td><?php echo $a['id'] ?></td>
				<td><?php echo $a['name'] ?></td>
				<td><?php echo $a['email'] ?></td>
				<td><?php echo $a['phone'] ?></td>
				<td>
				<a href="registration_view.php?a=<?php echo $a['id']?>" class="btn btn-info">View</a>
				<a href="registration_edit.php?a=<?php echo $a['id']?>" class="btn btn-info">Edit</a>
				<a href="registration_delete.php?a=<?php echo $a['id']?>" class="btn btn-info">Delete</a>
			</td>
			</tr>
			<?php
		}
			?>
		</table>
	</div>

</body>
</html>