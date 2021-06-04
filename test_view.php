<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-info text-center">Test Data View</h1>
			<tr>
				<th>Id</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Pincode</th>
			</tr>

			<?php
			include "db_conn.php";
			$id=$_GET['a'];
			$data="select * from test where id=$id";
			$a=mysqli_query($conn,$data);
			$b=mysqli_fetch_array($a);
			// echo "<pre>";
			// print_r($b);
			?>

			<tr>
				<td><?php echo $b['id'] ?></td>
				<td><?php echo $b['username'] ?></td>
				<td><?php echo $b['password'] ?></td>
				<td><?php echo $b['email'] ?></td>
				<td><?php echo $b['phone'] ?></td>
				<td><?php echo $b['address'] ?></td>
				<td><?php echo $b['pincode'] ?></td>
			</tr>
			
		</table>
	</div>

</body>
</html>