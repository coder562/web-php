<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from task3 where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);
$o=$data['features'];
$p=$data['city'];
$x=explode(',',$o);
$y=explode(',',$p);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<form method="post" action="task3_update.php">
				<input type="text" name="id" value="<?php echo $b['id']?>">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color: darkblue;"><b>Floor Name</b></label><br>
							<input type="text" name="name" value="<?php echo $b['name'] ?>" class="form-control">
						</div>
				</div>

				<div class="col-md-6">
						<div class="form-group">
							<label style="color: darkblue;">Gender</label><br>
							<input type="radio" name="gender" value="male">
							<?php
							if($b['gender']=='male'){
								echo "checked";
							}
							?>
							Male
							<input type="radio" name="gender" value="female">
							<?php
							if($b['gender']=='female'){
								echo "checked";
							}
							?>
							Female
						</div>
				</div>


				
			</div>

				<div class="row">
					<div class="col-md-11">
						<div class="form-group">
							<label style="color:darkblue;"><b>Property Address</b></label>
							<input type="text" name="address" value="<?php echo $b['address'] ?>" class="form-control">
						</div>
					</div>
					<!-- <h6>click here for find the latitude and longitude</h6> -->
					<div class="row" style="margin-left: -2px;">
						<div class="col-md-4">
							<div class="form-group">
								<label style="color: darkblue;">Latitude</label>
								<input type="number" name="latitude" value="<?php echo $b['latitude'] ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label style="color: darkblue;">Longitude</label>
								<input type="number" name="longitude" value="<?php echo $b['longitude'] ?>" class="form-control">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label style="color: darkblue;">Zip Code</label>
								<input type="number" name="zip" value="<?php echo $b['zip'] ?>" class="form-control">
							</div>
						</div>
					</div>

					<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Sales or Rent Price</label>
									<input type="number" name="sales" value="<?php echo $b['sales'] ?>" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Price Postfix</label>
									<input type="number" name="price" value="<?php echo $b['price'] ?>" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Area Size</label>
									<input type="number" name="area" value="<?php echo $b['area'] ?>" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Size Postfix</label>
									<input type="number" name="size" value="<?php echo $b['size'] ?>" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Bathroom</label>
									<input type="text" name="bathroom" value="<?php echo $b['bathroom'] ?>" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Bedroom</label>
									<input type="text" name="bedroom" value="<?php echo $b['bedroom'] ?>" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Reception</label>
									<input type="text" name="reception" value="<?php echo $b['reception'] ?>" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Garage</label>
									<input type="text" name="garage" value="<?php echo $b['garage'] ?>" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									Features:
									<input type="checkbox" name="features[]" value="Air Conditioner"
									<?php
									if(in_array('Air Conditioner',$x)){
										echo "checked";
									}
									?>
									>Air Conditioner
									<br>
									<input type="checkbox" name="features[]" value="cctvr"
									<?php
									if(in_array('cctvr',$x)){
										echo "checked";
									}
									?>
									>CCTvr
									<br>
									<input type="checkbox" name="features[]" value="balcony"
									<?php
									if(in_array('balcony',$x)){
										echo "checked";
									}
									?>
									>Balcony
									<br>
									<input type="checkbox" name="features[]" value="lift"
									<?php
									if(in_array('lift',$x)){
										echo "checked";
									}
									?>
									>Lift
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									 City:
									<input type="checkbox" name="city[]" value="angel"
									<?php
									if(in_array('angel',$y)){
										echo "checked";
									}
									?>
									>Angel
									<br>
									<input type="checkbox" name="city[]" value="baker street"
									<?php
									if(in_array('baker street',$y)){
										echo "checked";
									}
									?>
									>Baker Street
									<br>
									<input type="checkbox" name="city[]" value="north london"
									<?php
									if(in_array('north london',$y)){
										echo "checked";
									}
									?>
									>North London
									<br>
									<input type="checkbox" name="city[]" value="chelesa"
									<?php
									if(in_array('chelesa',$y)){
										echo "checked";
									}
									?>
									>Chelesa
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Property Id</label>
										<input type="number" name="property" value="<?php echo $b['property'] ?>" class="form-control">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
									<label>Home Type:</label>
									<select name="home">
										<option value="1bhk"
										<?php
										if($b['home']=='1bhk'){
											echo "selected";
										}
										?>
										>1 bhk</option>
										<option value="2bhk"
										<?php
										if($b['home']=='2bhk'){
											echo "selected";
										}
										?>
										>2 bhk</option>
										<option value="3bhk"
										<?php
										if($b['home']=='3bhk'){
											echo "selected";
										}
										?>
										>3 bhk</option>
										<option value="4bhk"
										<?php
										if($b['home']=='4bhk'){
											echo "selected";
										}
										?>
										>4 bhk</option>
										
									</select>
									<br>
									<button class="btn btn-danger">Submit</button>
								</div>
							</div>


							
						</div><!--row end-->
						</div><!--row end-->
						</div><!--row end-->


						</div><!--row end-->
						</div><!--row end-->
						</div><!--row end-->


					
			</form>
		</div><!--col-md-10 end-->
		</div><!--row end-->
		</div><!--container end-->

	</div><!--container-fluid end-->

</body>
</html>