<?php
include "db_conn.php";
$id=$_GET['id'];
$data="select * from form where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);

$c=$data['education'];
$b=explode(',',$c);





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	

	
</head>
<body>

	<form method="post" action="form_insert.php">
		<input type="hidden" name="id" value="<?php echo $b['id'] ?>">
		Name:
		<input type="text" name="name" value="<?php echo $b['name'] ?>">
		<br>
		<br>
		College:
		<select name="college">
			<option value="select">Select</option>
			<option value="rjit">RJIT</option>
			<?php
			if ($b['college]'=='RJIT']){
				echo "selected";
			}
			?>
			<option value="mpct">mpct</option>
			<option value="itm">itm</option>
			<option value="jaincollege">jain college</option>
		</select>
		<br>
		<br>
		Gender:
		<input type="radio" name="gender" value="male">Male
		<?php
		if($b['gender']=='male'){
			echo "checked";
		}
		?>
	        <input type="radio" name="gender" value="female">FeMale
	        <input type="radio" name="gender" value="other">other
               <br>
               <br>
               Education:
            <input type="checkbox" name="education[]" value="mca"
            <?php
            if(in_array('mca',$b)){
            	echo "checked";
            }
            ?>
            >MCA
        	<input type="checkbox" name="education[]" value="ca"
        	<?php
            if(in_array('ca',$b)){
            	echo "checked";
            }
            ?>
        	>CA      
        	<input type="checkbox" name="education[]" value="ma"
        	<?php
            if(in_array('ca',$b)){
            	echo "checked";
            }
            ?>
        	>MA
        	<input type="checkbox" name="education[]" value="bba"
        	<?php
            if(in_array('ca',$b)){
            	echo "checked";
            }
            ?>
        	>BBA
        	<br>
        	<br>
        	<input type="submit" name="a" value="Submit">
	</form>
</body>
</html>