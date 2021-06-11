<?php
include "db_conn.php";
$id=$_GET['a'];
$data = "select * from registration where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);
?>

<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<form method="post" action="registration_update.php">
		<input type="text" name="id" value="<?php echo $b['id'] ?>">
		Name:
		<input type="text" name="name" value="<?php echo $b['name'] ?>">
		<br>
		Email:
		<input type="email" name="email" value="<?php echo $b['email'] ?>">
		<br>
		Phone:
		<input type="number" name="phone" value="<?php echo $b['phone'] ?>">
		<br>
		roll no:
		<input type="number" name="roll" value="<?php echo $b['roll'] ?>">
		<br>
		Gender:
		<input type="radio" value="male"  name="gender" >
		<?php
		if($b['gender']=='male'){
			echo "checked";
		}
		?>
		Male
		<input type="radio" value="female"  name="gender" >
		<?php
		if($b['gender']=='female'){
			echo "checked";
		}
		?>
		Female
		<br>
		D.O.B
		<input type="date" name="DOB" value="<?php echo $b['DOB'] ?>">
		<br>
		password:
		<input type="password" name="password" value="<?php echo $b['password'] ?>">
		<br>
		<label>Subjects</label>
		<select name="subjects">
			<option>Select</option>
			<option value="DBMS"
			<?php
			if($b['subjects']=='DBMS'){
				echo "selected";
			}
			?>
			>DBMS</option>
			<option value="PHP"
			<?php
			if($b['subjects']=='PHP'){
				echo "selected";
			}
			?>

			>PHP</option>
			<option value="MYSQL"
			<?php
			if($b['subjects']=='MYSQL'){
				echo "selected";
			}
			?>
			>MYSQL</option>
			<option value="PYTHON"
			<?php
			if($b['subjects']=='PYTHON'){
				echo "selected";
			}
			?>
			>PYTHON</option>
			<option value="BOOTSTRAP"
			<?php
			if($b['subjects']=='BOOTSTRAP'){
				echo "selected";
			}
			?>
			>BOOTSTARP</option>
		</select>
		<br>
		<label>Semester</label>
		<select name="semester">
			<option>Select</option>
			<option value="1ST"
			<?php
			if($b['semester']=='1ST'){
				echo "selected";
			}
			?>
			>1ST</option>
			<option value="2ND"
			<?php
			if($b['semester']=='2ND'){
				echo "selected";
			}
			?>
			>2ND</option>
			<option value="3RD"
			<?php
			if($b['semester']=='3RD'){
				echo "selected";
			}
			?>
			>3RD</option>
			<option value="4TH"
			<?php
			if($b['semester']=='4TH'){
				echo "selected";
			}
			?>
			>4TH</option>
			<option value="5TH"
			<?php
			if($b['semester']=='5TH'){
				echo "selected";
			}
			?>
			>5TH</option>
			<option value="6TH"
			<?php
			if($b['semester']=='6TH'){
				echo "selected";
			}
			?>
			>6TH</option>
			<option value="7TH"
			<?php
			if($b['semester']=='7TH'){
				echo "selected";
			}
			?>
			>7TH</option>
			<option value="8TH"
			<?php
			if($b['semester']=='8TH'){
				echo "selected";
			}
			?>
			>8TH</option>
		</select>
		<br>
		<button>Update</button>

	</form>

</body>
</html>