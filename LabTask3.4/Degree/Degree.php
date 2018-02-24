<?php
	if(isset($_POST['DEGREE'])){
		echo $_POST['DEGREE'];
	}
?>

<form action="#" method="POST"> 
	<fieldset>
		<legend>DEGREE</legend>
			<input type="checkbox" name="DEGREE" value="SSC">SSC
			<input type="checkbox" name="DEGREE" value="HSC">HSC
			<input type="checkbox" name="DEGREE" value="BSc">BSc
			<input type="checkbox" name="DEGREE" value="MSc">MSc
			<hr>
			<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>