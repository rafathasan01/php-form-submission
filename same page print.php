<?php

	$uerror="";
	$eerror="";
	$derror="";
	//$gerror="";
	//$dgerror="";
	$bgerror="";

	if(isset($_REQUEST['submit'])){

		$name = $_REQUEST['name'];
		$email= $_REQUEST['email']; 
		//$dob= $_REQUEST['dob']; 
		//$gender= $_REQUEST['gender']; 
		//$degree= $_REQUEST['degree']; 
		//$bloodgroup= $_REQUEST['bloodgroup']; 

		if($name == ""){
			$uerror = "null username";
		}else{
			$uerror = $name;
		}
		
		if($email == ""){
			$eerror = "null email";
		}else{
			$eerror = $email;
		}
		
		if($dob == ""){
			$derror = "null date of birth";
		}else{
			$derror = $dob;
		}
		
		
		/*if($gender == ""){
			$gerror = "null gender";
		}else{
			$gerror = $gender;
		}
		
		if($degree == ""){
			$dgerror = "null degree";
		}else{
			$dgerror = $degree;
		}*/
		
		
		if($bloodgroup == ""){
			$bgerror = "null bloodgroup";
		}
		else{
			$bgerror = $bloodgroup;
		}
		
	}
		
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form  method="GET">
		<fieldset>
			<legend>NAME</legend>
			<table border="0" size="50">
				<tr>
					<td><input type="text" name="name"  size="30" /> <?php echo $uerror; ?> 
				<hr width="200%"> 
				</td>
				<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
				</tr>
				
			</table>
		</fieldset>
		
		<fieldset>
			<legend>EMAIL</legend>
			<table border="0" size="50">
				<tr>
					<td><input type="text" name="email" size="30" /><?php echo $eerror; ?> 
				<hr width="200%">
				</td>
				<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
				</tr>
				
			</table>
		</fieldset>
		
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			<table border="0" size="50">
				<tr>
					<td><input type="date" name="dob" />  <?php echo $derror; ?>
				<hr width="200%">
				</td>
				<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
				</tr>
				
			</table>
		</fieldset>
		
		<fieldset>
			<legend>GENDER</legend>
			<table border="0" size="50">
				<tr>
					<td><input type="radio" name="gender"/> Male
						<input type="radio" name="gender"/> Female 
				
				 <hr width="200%">
				</td>
				<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
				</tr>
				
			</table>
		</fieldset>
		
		<fieldset>
			<legend>DEGREE</legend>
			<table border="0" size="50">
				<tr>
					<td><input type="checkbox" name="option[]">SSC
						<input type="checkbox" name="option[]">HSC
						<input type="checkbox" name="option[]">BSc
						<input type="checkbox" name="option[]">MSc
				
				 <hr width="200%">
				</td>
				<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
				</tr>
				
			</table>
		</fieldset>
		<fieldset>
			<legend>BLOOD GROUP</legend>
			<table border="0" size="50">
				<tr>
					<td><select name="bloodgroup">
							<option></option>
							<option>A+</option>
							<option>B+</option>
							<option>AB+</option>
							<option>O+</option>
							<option>A-</option>
							<option>B-</option>
							<option>AB-</option>
							<option>O-</option>
						</select>
						
                         <?php echo $bgerror; ?> <hr width="200%">
				</td>
				<tr>
				<td>
					<input type="submit" name="submit "value="submit">
				</td>
				</tr>
				
			</table>
		</fieldset>
	</form>
		
</body>
</html>