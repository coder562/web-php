<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from pnform where id=$id";
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

	<div class="container-fluid bg-dark">
		<div class="container">

		    <div class="row">
	
			    <div class="col-md-6"><br>
				    <h3 class="text-white">Do Summer Internship From Home!.</h3>
				    <p class="text-white">Once you"re registered, you can:</p><br>
				    <p class="text-white">In Case any query, Kindly Contact: 7000846823</p>
				    <hr style=" border: 0;border-top: 1px solid white ;">


				
                    <div class="card">

					<img src="https://internship2021.pninfosys.com/image/banner3.jpg">
					
				    </div><!---card end--->
				    <div class="card-body">
				    <h4 class="text-white">Learn from the comfort of your home</h4>
				    <p class="text-white">work-from-home transformational program aimed at building the leaders of tomorrow. Any college student from any degree, stream, and year of study can apply for this program.</p>
                    </div>

			    </div><!---col-6 end--->
			    <div class="col-md-6">
			    	<br>
				    <div class="card" style="padding: 10px"><br>
				    	<h2 class="text-info text-center">Registration Form 2021</h2>
				    	<form method="post" action="pnform_update.php">
				    		<input type="text" name="id" value="<?php echo $b['id'] ?>">
				    		<div class="form-group">
				    			<label>Name</label>
				    			<input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $b['name'] ?>">
				    		</div>
				    		<div class="form-group">
				    			<label>Email</label>
				    			<input type="Email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $b['email'] ?>">
				    		</div>
				    		<div class="form-group">
				    			<label>Mobile Number</label>
				    			<input type="Number" name="number" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $b['number'] ?>">
				    		</div>
				    		<div class="form-group">
				    			<label>Address</label>
				    			<input type="text" name="address" class="form-control" value="<?php echo $b['address'] ?>">
				    		</div>
				    		<div class="form-group">
				    			<label>Gender</label><br>
				    			<input type="radio" value="male" name="gender" >Male
				    			<input type="radio" value="female" name="gender" >Female
				    		</div>
				    		<div class="form-group">
				    			
				    		    <label>College</label>
				    		    <select class="form-control" name="college"> 
				    		    <option>Select</option>
				    				<option>RJIT</option>
				    				<option>SHRI RAM COLLEGE OF ENGINEERING AND MANAGEMENT</option>
				    				<option>ITM</option>
				    				<option>MITS</option>
				    				<option>MPCT</option>
				    				<option>OTHERS</option>
				    			</select>
				    		</div>
				    		<div class="form-group">
				    			<label>Qualifications</label>
				    			<select class="form-control" name="qualifications">
				    			<option>Select</option>
				    				<option>B.Tech</option>
				    				<option>B.C.A</option>
				    				<option>M.C.A</option>
				    				<option>B.Sc</option>
				    				<option>OTHERS</option>
				    			</select>
				    		</div>
				    		<div class="form-group">
				    			<label>Branch</label>
				    			<select name="branch" class="form-control">
				    				<option>Select</option>
				    				<option>C.S.E</option>
				    				<option>I.T</option>
				    				<option>E.C</option>
				    				<option>E.E</option>
				    				<option>MECH.</option>
				    				<option>CIVIL</option>
				    				<option>AUTOMOBILE</option>
				    				<option>OTHERS</option>
				    			</select>
				    		</div>
				    		<div class="form-group">
				    			<label>Semester</label>
				    			<select name="semester" class="form-control">
				    				<option>Select</option>
				    				<option>Ist Semester</option>
				    				<option>IInd Semester</option>
				    				<option>IIIrd Semester</option>
				    				<option>IVth Semester</option>
				    				<option>Vth Semester</option>
				    				<option>VIth Semester</option>
				    				<option>VIIth Semester</option>
				    				<option>VIIIth Semester</option>
				    			</select>
				    		</div>
				    		<div class="form-group">
				    			<label>Internship Course</label>
				    			<select name="internship" class="form-control">
				    				<option>Select</option>
				    				<option>Web Designing Internship Course (60 days)</option>
				    				<option>Web Development Internship Course <120 days)</option>
				    				<option>PHP</option>
				    				<option>Laravel 8</option>
				    				<option>Angular 11</option>
				    				<option>Python</option>
				    				<option>Django</option>
				    			</select>
				    		</div>

				    		<button class="btn btn-info">Update</button><br>
				    		
				    		
				    	</form><br>
					

				    </div><!--card end-->
				
			    </div><!---col-6 end-->
		    </div><!---row end-->
		</div><!---container end--->
	</div><!---container-fluid end--->

</body>
</html>