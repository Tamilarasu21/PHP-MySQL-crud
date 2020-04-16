<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>
<?php
include "config.php"; 	#database connectivity

if(isset($_GET['search']))
{
	$keyword=$_GET['keyword'];

	$query="select * from user where username='".$keyword."' OR id='".$keyword."'";  #query

	$exe=mysqli_query($con,$query);  	#executing Query
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
	
while($rows=mysqli_fetch_array($exe))   #fetch data via array
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
		<td>&nbsp;<a href="edit.php?id=<?php echo $id;?>" id="link-change">&nbsp;<i class="fa fa-pencil-square-o"></i> Update </a><br>&nbsp;<a href="delete.php?id=<?php echo $id;?>" id="link-danger">&nbsp;<i class="fa fa-trash"></i> Delete </a></td></tr>
	<?php
}
}
 ?>
</table>
</div>
</body>
</html>
