<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title></title>
	
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<form method="post" action="task3_insert.php">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color: darkblue;"><b>Floor Name</b></label><br>
							<input type="text" name="name" class="form-control">
						</div>
				</div>

				<div class="col-md-6">
						<div class="form-group">
							<label style="color: darkblue;">Gender</label><br>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
						</div>
				</div>


				
			</div>

				<div class="row">
					<div class="col-md-11">
						<div class="form-group">
							<label style="color:darkblue;"><b>Property Address</b></label>
							<input type="text" name="address" class="form-control">
						</div>
					</div>
					<!-- <h6>click here for find the latitude and longitude</h6> -->
					<div class="row" style="margin-left: -2px;">
						<div class="col-md-4">
							<div class="form-group">
								<label style="color: darkblue;">Latitude</label>
								<input type="number" name="latitude" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label style="color: darkblue;">Longitude</label>
								<input type="number" name="longitude" class="form-control">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label style="color: darkblue;">Zip Code</label>
								<input type="number" name="zip" class="form-control">
							</div>
						</div>
					</div>

					<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Sales or Rent Price</label>
									<input type="number" name="sales" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Price Postfix</label>
									<input type="number" name="price" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Area Size</label>
									<input type="number" name="area" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Size Postfix</label>
									<input type="number" name="size" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Bathroom</label>
									<input type="text" name="bathroom" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Bedroom</label>
									<input type="text" name="bedroom" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Reception</label>
									<input type="text" name="reception" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="color: darkblue;">Garage</label>
									<input type="text" name="garage" class="form-control">
								</div>
							</div>

							<div class="row" style="margin-left: -2px;">
							<div class="col-md-6">
								<div class="form-group">
									Features:
									<input type="checkbox" name="features[]" value="Air Conditioner">Air Conditioner
									<br>
									<input type="checkbox" name="features[]" value="cctvr">CCTvr
									<br>
									<input type="checkbox" name="features[]" value="balcony">Balcony
									<br>
									<input type="checkbox" name="features[]" value="lift">Lift
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									 City:
									<input type="checkbox" name="city[]" value="angel">Angel
									<br>
									<input type="checkbox" name="city[]" value="baker street">Baker Street
									<br>
									<input type="checkbox" name="city[]" value="north london">North London
									<br>
									<input type="checkbox" name="city[]" value="chelesa">Chelesa
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Property Id</label>
										<input type="number" name="property" class="form-control">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
									<label>Home Type:</label>
									<select name="home">
										<option value="1bhk">1 bhk</option>
										<option value="2bhk">2 bhk</option>
										<option value="3bhk">3 bhk</option>
										<option value="4bhk">4 bhk</option>
										
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