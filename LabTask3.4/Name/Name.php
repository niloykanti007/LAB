<?php
	if(isset($_POST['NAME']))
	{
		echo $_POST['NAME'];
	}
?>

<form action="#" method="POST">
	<fieldset>
		<legend>NAME</legend>
		<input type="text" name="NAME" value="" ><br/>
		<hr>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>