<!DOCTYPE html>
<html>
<body background="b1.jpg">
	<div class="login">
		<div class="login-form">
			<h1>Registration Form</h1>
			<form name="form" action="pattientsave.php" method="post">
				<input type="text" title="FirstName" placeholder="FirstName" name="firstname" oninvalid="setCustomValidity('Enter First Name')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="MiddleName" placeholder="MiddleName" name="middlename" oninvalid="setCustomValidity('Enter Middle Name')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="Surname" placeholder="Surname" name="surname" oninvalid="setCustomValidity('Enter Surname')" oninput="setCustomValidity('')" required/><br>
				<input type="Password" title="Password" placeholder="Password" name="password" oninvalid="setCustomValidity('Enter Password')" oninput="setCustomValidity('')"required/><br>
				<input type="Password" title="ConfrimPassword" placeholder="ConfrimPassword" name="password2" oninvalid="setCustomValidity('Verify Password')" oninput="setCustomValidity('')" required/><br> <br>
				<input type="submit" value="Register" class="submitbutton"/><br><br>
			</form>
			
		</div>
	</div>
</body>
</html>
