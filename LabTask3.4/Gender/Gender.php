<?php
	if(isset($_POST['GENDER'])){
		echo $_POST['gender'];
	}
?>

<form action="#" method="POST"> 
	<fieldset>
		<legend>GENDER</legend>
		<input type="radio" name="GENDER" value="Male">Male
		<input type="radio" name="GENDER" value="Female">Female
		<input type="radio" name="GENDER" value="Other">Other
		<hr>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>