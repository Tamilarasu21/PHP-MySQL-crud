<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>registration_form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body><center>
	<div class="form-data">
<form method="post" action="insert.php">
	<h4>Registration Form</h4>
	<table >
	<tr><td><label for="firstname">First name </label></td><td><input type="text" name="firstname" id="firstname"></td></tr>
	<tr><td><label for="secondname">Second name </label><td><input type="text" name="secondname"></tr>
	<tr><td><label for="email">Email </label></td><td><input type="email" name="email" id="email"></tr>
	<tr><td><label for="mobileno">Mobile number </label><td><input type="number" name="mobileno" id="mobileno"></tr>
	<tr><td><label for="rollno">Rollno </label><td><input type="number" name="rollno" id="rollno"></tr>
	<tr><td><label>Gender </label></td><td>
	<input type="radio" name="gender" value="male" id="male">&nbsp;<label for="male">Male</label><br>
	<input type="radio" name="gender" value="female" id="female">&nbsp;<label for="female">Female</label><br>
	<input type="radio" name="gender" value="others" id="others">&nbsp;<label for="others">Others</label></td></tr>
	<tr><td><label for="designation">Designation </label></td>
	<td><select name="designation" id="designation" class="dpd">
		<option selected="" hidden=""></option>
		<option>Student</option>
		<option>Staff</option>
		<option>Proffessional</option>
	</select></td></tr>
	<tr><td><label>Wanna learn </label></td>
	<td><input type="checkbox" name="skill[]" id="C++" value="C++">&nbsp;<label for="C++">C++</label><br>
	<input type="checkbox" name="skill[]" id="Python" value="Python">&nbsp;<label for="Python">Python</label><br>
	<input type="checkbox" name="skill[]" id="Java" value="Java">&nbsp;<label for="Java">Java</label><br>
	<input type="checkbox" name="skill[]" id="PHP" value="PHP">&nbsp;<label for="PHP">PHP</label><br>
	<input type="checkbox" name="skill[]" id="JS" value="JS">&nbsp;<label for="JS">JS</label></td></tr>
	<tr><td><p>Skill level </p></td>
	<td><input type="range" name="level" min="0" max="10" step="1" class="slider"></td></tr>
<tr><td><label for="username">Username : </label></td><td><input type="text" name="username" id="username"></td></tr>
<tr><td><label for="password">Password </label></td><td><input type="password" name="password" id="password"></td></tr>
<tr><td><label for="cpassword">Confirm Password </label></td><td><input type="password" name="cpassword" id="cpassword"></td></tr>
</table><br>
<input type="submit" name="submit">
    </form>
    </div></center>
</body>
</html>
<!---################################## THAT'S ALL ############################################-->
 