<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<table class="table table-bordered">
			<h1 class="bg-danger text-center">Data View</h1>
			<tr>
				<th>Id</th>
		<th>Floor name</th>
		<th>Gender</th>
		<th>Property address</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Zip code</th>
		<th>Sales or Rent price</th>
		<th>Price postfix</th>
		<th>Area size</th>
		<th>Size postfix</th>
		<th>Bathroom</th>
		<th>Bedroom</th>
		<th>Reception</th>
		<th>Garage</th>
		<th>Features</th>
		<th>City</th>
		<th>Property id</th>
		<th>Home type</th>
	</tr>
	<?php
	include "db_conn.php";
	$id=$_GET['a'];
	$data="select * from task3 where id=$id";
	$a=mysqli_query($conn,$data);
	$b=mysqli_fetch_array($a);
	// echo "<pre>";
	// print_r($b);
	?>

	<tr>
		<td><?php echo $b['id'] ?></td>
		<td><?php echo $b['name'] ?></td>
		<td><?php echo $b['gender'] ?></td>
		<td><?php echo $b['address'] ?></td>
		<td><?php echo $b['latitude'] ?></td>
		<td><?php echo $b['longitude'] ?></td>
		<td><?php echo $b['zip'] ?></td>
		<td><?php echo $b['sales'] ?></td>
		<td><?php echo $b['price'] ?></td>
		<td><?php echo $b['area'] ?></td>
		<td><?php echo $b['size'] ?></td>
		<td><?php echo $b['bathroom'] ?></td>
		<td><?php echo $b['bedroom'] ?></td>
		<td><?php echo $b['reception'] ?></td>
		<td><?php echo $b['garage'] ?></td>
		<td><?php echo $b['features'] ?></td>
		<td><?php echo $b['city'] ?></td>
		<td><?php echo $b['property'] ?></td>
		<td><?php echo $b['home'] ?></td>


	</tr>
	</table>
	</div>

</body>
</html>