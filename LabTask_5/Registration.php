<html>
<head></head>

<body>
<form>
	<fieldset>
		<legend>REGISTRATION</legend>
		<b>Name :</b><input type="text" name="Name" value=""></br>
		<hr>
		<b>Email :</b><input type="text" name="Email" value=""></br>
		<hr>
		<b>UserName :</b><input type="text" name="UserName" value=""></br>
		<hr>
		<b>Password :</b><input type="text" name="Password" value=""></br>
		<hr>
		<b>Confirm Password :</b><input type="text" name="Confirm Password" value=""></br>
		<hr>
			<fieldset>
				<legend>Gender</legend>
				<input type="radio" name="Male" value="Male"><?php if (isset($Gender) && $Gender=="male") echo "checked";?>Male</br>
				<hr>
				<input type="radio" name="Female" value="Female"><?php if (isset($Gender) && $Gender=="Female") echo "checked";?>Female</br>
				<hr>
				<input type="radio" name="Other" value="Other"><?php if (isset($Gender) && $Gender=="Other") echo "checked";?>Other</br>
				<hr>
			</fieldset>
			<fieldset>
				<legend>Date of Birth</legend>
				<input type="text" name="Date" value="">
				<input type="text" name="Month" value="">
				<input type="text" name="Year" value="">
				(dd/mm/yyyy)
			</fieldset>
			<input type="submit" name="Submit" value="Submit">
			<input type="submit" name="Reset" value="Reset">
	</fieldset>
</form>
</body>
</html>