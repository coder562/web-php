<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-danger text-center">Data Display</h1>
			<tr>
				<th>Id</th>
				<th>Floor Name</th>
				<th>Gender</th>
				<th>Property Address</th>
				<th>Latitude</th>
				<th>Longitude</th>
			</tr>
			<?php
			include "db_conn.php";
			$data="select * from task3";
			$result=mysqli_query($conn,$data);

			while($a=mysqli_fetch_array($result)){
				// echo "<pre>";
				// print_r($a);
			?>
			<tr>
				<td><?php echo $a['id'] ?></td>
				<td><?php echo $a['name'] ?></td>
				<td><?php echo $a['gender'] ?></td>
				<td><?php echo $a['address'] ?></td>
				<td><?php echo $a['latitude'] ?></td>
				<td><?php echo $a['longitude'] ?></td>
				<td>
					<a href="task3_view.php?a=<?php echo $a['id']?>" class="btn btn-danger">View</a>
					<a href="task3_edit.php?a=<?php echo $a['id']?>" class="btn btn-danger">Edit</a>
					<a href="task3_delete.php?a=<?php echo $a['id']?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			
			<?php
		}
			?>

		</table>
	</div>

</body>
</html>