<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css\style.css">
   	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>displaying_data</title>
</head>
<body style="font-family: Verdana;font-size:16px;">
<?php 
include "config.php"; 	#connect to database
$query="select * from register"; 	#query to select all data
$exe=mysqli_query($con,$query);		#executing query
?>
<div class="show-data">
	<table>
		<tr><td colspan="12" style="background:#e0e68c;"><center><h2>USER INFORMATION</h2></center></td></tr>
	<tr>
		<th>ID</th>
		<th>Firstame</th>
		<th>Secondname</th>
		<th>Email</th>
		<th>Mobile no</th>
		<th>Roll no</th>
		<th>Gender</th>
		<th>Designation</th>
		<th>Skill</th>
		<th>level</th>
		<th>Username</th>
		<th>Operation</th>
	</tr>
<?php
	
while($rows=mysqli_fetch_assoc($exe))   #fetching via associative array
{
	$id=$rows['id'];
	$firstname_s=$rows['firstname'];
	$secondname_s=$rows['secondname'];
	$email_s=$rows['email'];
	$mobileno_s=$rows['mobileno'];
	$rollno_s=$rows['rollno'];
	$gender_s=$rows['gender'];
	$designation_s=$rows['designation'];
	$skill_s= $rows['skill'];
	$level_s=$rows['level'];
	$username_s=$rows['username'];
	?>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $firstname_s; ?></td>
		<td><?php echo $secondname_s; ?></td>
		<td><?php echo $email_s; ?></td>
		<td><?php echo $mobileno_s; ?></td>
		<td><?php echo $rollno_s; ?></td>
		<td><?php echo $gender_s; ?></td>
		<td><?php echo $designation_s; ?></td>
		<td><?php echo $skill_s; ?></td>
		<td><?php echo $level_s; ?></td>
		<td><?php echo $username_s; ?></td>
		<td>&nbsp;<a href="edit.php?id=<?php echo $id;?>" id="link-change">&nbsp;<i class="fa fa-pencil-square-o"></i> Update </a><br>&nbsp;<a href="delete.php?id=<?php echo $id;?>" id="link-danger">&nbsp;<i class="fa fa-trash-o"></i> Delete </a></td></tr>
	<?php
}
 ?>
</table>
<div align="right" class="add-new">
	<br>
<a href="register.php">&nbsp;<i class="fa fa-user-plus"></i>Add new user&nbsp;</a>
</div>
</div>
<br>
<br>
<br>
</body>
</html>