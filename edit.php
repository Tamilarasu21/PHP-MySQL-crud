<?php 
include "config.php";
session_start();
$id=$_GET['id'];

$query="select * from user where id='".$id."'";
$exe=mysqli_query($con,$query);

while($rows=mysqli_fetch_array($exe))
{
	$id=$rows['id'];
	$firstname=$rows['firstname'];
	$secondname=$rows['secondname'];
	$email=$rows['email'];
	$mobileno=$rows['mobileno'];
	$rollno=$rows['rollno'];
	$gender=$rows['gender'];
	$designation=$rows['designation'];
	$a=$rows['skill'];
	$skill=explode(",",$a);
	$level=$rows['level'];
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
	 <meta charset="utf-8">
 	<title>Edit_Details</title>
	 <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 <div class="form-data">
	 <center>
		 <h4>Edit data</h4>
 <form action="update.php?id=<?php echo $id; ?>" method="post">
 	<table >
 		<!-- firstname -->
	<tr><td><label for="firstname">First name </label></td><td><input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>"></td></tr>
	<!-- secondname -->
	<tr><td><label for="secondname">Second name </label><td><input type="text" name="secondname" value="<?php echo $secondname ?>"></tr>
	<!-- email -->
	<tr><td><label for="email">Email </label></td><td><input type="email" name="email" id="email" value="<?php echo $email ?>"></tr>
		<!-- mobile number -->
	<tr><td><label for="mobileno">Mobile number </label><td><input type="number" name="mobileno" id="mobileno" value="<?php echo $mobileno ?>"></tr>
		<!-- roll number -->
	<tr><td><label for="rollno">Rollno </label><td><input type="number" name="rollno" id="rollno" value="<?php echo $rollno;?>"></tr>
		<!-- Gender -->
	<tr><td><label>Gender </label></td><td>
	<input type="radio" name="gender" id="male" value="male"  <?php echo ($gender == 'male') ? 'checked' : ''; ?>>&nbsp;<label for="male">Male</label><br>
	<input type="radio" name="gender" id="female" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>>&nbsp;<label for="female">Female</label><br>
	<input type="radio" name="gender" id="others" value="others" <?php echo ($gender == 'others') ? 'checked' : ''; ?>>&nbsp;<label for="others">Others</label></td></tr>
	<!-- Designation -->
	<tr><td><label for="designation">Designation </label></td>
	<td><select name="designation" id="designation" class="dpd">
		<option selected="" hidden="" disabled=""></option>
		<option <?php if($designation=="Student"){echo "selected";}?>>Student</option>
		<option <?php if($designation=="Staff"){echo "selected";}?>>Staff</option>
		<option <?php if($designation=="Proffessional"){echo "selected";}?>>Proffessional</option>
	</select></td></tr>
	<!-- courses	 -->
	<tr><td><label>Wanna learn </label></td>
	<td>&nbsp; 

		<input type="checkbox" name="skill[]" id="C++" value="C++" 
		<?php
if(in_array("C++",$skill))
{
	echo "checked";
}
		?>
		>&nbsp;<label for="C++">C++</label><br>

	<input type="checkbox" name="skill[]" id="Python" value="Python" 
<?php
if(in_array("Python",$skill))
{
	echo "checked";
}
?>
	>&nbsp;<label for="Python">Python</label><br>

	<input type="checkbox" name="skill[]" id="Java" value="Java" 
<?php
if(in_array("Java",$skill))
{
	echo "checked";
}
?>
	>&nbsp;<label for="Java">Java</label><br>

	<input type="checkbox" name="skill[]" id="PHP" value="PHP" 
<?php
if(in_array("PHP",$skill))
{
	echo "checked";
}
?>
	>&nbsp;<label for="PHP">PHP</label><br>

	<input type="checkbox" name="skill[]" id="Javascript" value="JS" 
<?php
if(in_array("JS",$skill))
{
	echo "checked";
}
?>
	>&nbsp;<label for="JS">JS</label></td></tr>
<!-- your skill level -->
	<tr><td><p>Skill level </p></td>
	<td><input type="range" name="level" min="0" max="10" step="1" class="slider" value="<?php echo $level;?>"></td></tr>
</table><br><br>
<input type="submit" value="update" name="update">
 </form>
 </center>
 </div>
 </body>
 </html>
 <!-- ############################################# THAT'S ALL ############################################################# -->