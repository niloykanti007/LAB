<form action="#" method="POST">
	<fieldset>
		<legend>BLOOD GROUP</legend>
		<select name="BloodGroup" >
			<option value="A+" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "A+"){echo "selected";}?>>A+</option>
			<option value="A-" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "A-"){echo "selected";}?>>A-</option>
			<option value="B+" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "B+"){echo "selected";}?>>B+</option>
			<option value="B-" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "B-"){echo "selected";}?>>B-</option>
			<option value="O+" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "O+"){echo "selected";}?>>O+</option>
			<option value="O-" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "O-"){echo "selected";}?>>O-</option>
			<option value="AB+" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "AB+"){echo "selected";}?>>AB+</option>
			<option value="AB-" <?php if(isset($_POST['BloodGroup']) && $_POST['BloodGroup'] == "AB-"){echo "selected";}?>>AB-</option>
		</select>
		<input type="submit" name="submit" value="Submit" >
		<hr>
	</fieldset>
</form>