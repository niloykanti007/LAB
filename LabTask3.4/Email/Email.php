<?php
	if(isset($_POST['EMAIL'])){
		echo $_POST['EMAIL'];
	}
?>

<form action="#" method="POST">
	<fieldset>
		<legend>EMAIL</legend>
		<input type="text" name="EMAIL" value="" ><br>
		<input type="submit" name="submit" value="Submit" >
		<hr>
	</fieldset>
</form>