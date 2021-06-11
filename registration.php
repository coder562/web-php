<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="registration_insert.php">
		Name:
		<input type="text" name="name">
		<br>
		Email:
		<input type="email" name="email">
		<br>
		Phone:
		<input type="number" name="phone">
		<br>
		roll no:
		<input type="number" name="roll">
		<br>
		Gender:
		<input type="radio" value="male"  name="gender" >Male
		<input type="radio" value="female"  name="gender" >Female
		<br>
		D.O.B
		<input type="date" name="DOB">
		<br>
		password:
		<input type="password" name="password">
		<br>
		<label>Subjects</label>
		<select name="subjects">
			<option>Select</option>
			<option>DBMS</option>
			<option>PHP</option>
			<option>MYSQL</option>
			<option>PYTHON</option>
			<option>BOOTSTARP</option>
		</select>
		<br>
		<label>Semester</label>
		<select name="semester">
			<option>Select</option>
			<option>1ST</option>
			<option>2ND</option>
			<option>3RD</option>
			<option>4TH</option>
			<option>5TH</option>
			<option>6TH</option>
			<option>7TH</option>
			<option>8TH</option>
		</select>
		<br>
		<button>Submit</button>

	</form>
	

</body>
</html>