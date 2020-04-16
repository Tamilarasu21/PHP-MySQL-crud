<?php 

include "config.php";  #database connectivity
if(isset($_POST['update']))
{
	$id_up=$_GET['id'];
	$firstname_up=$_POST['firstname'];
	$secondname_up=$_POST['secondname'];
	$email_up=$_POST['email'];
	$mobileno_up=$_POST['mobileno'];
	$rollno_up=$_POST['rollno'];
	$gender_up=$_POST['gender'];
	$designation_up=$_POST['designation'];
	$skill_up=implode(",",$_POST['skill']);
	$level_up=$_POST['level'];

	#query for updating
	$query="update user set firstname='".$firstname_up."',secondname='".$secondname_up."',email='".$email_up."',mobileno='".$mobileno_up."',rollno='".$rollno_up."',gender='".$gender_up."',designation='".$designation_up."',skill='".$skill_up."',level='".$level_up."' where id='".$id_up."'";
	$exe=mysqli_query($con,$query); 	#executing Query
	if($exe)
	{
		header("location:display.php");  #redirecting to display.php
	}
	else
	{
		echo "<script>alert('error in updating data');</script>";  #error message
	}
}
else
	{
		header("location:index.php?mes='error occured'");   #error message
	}
 ?>
 