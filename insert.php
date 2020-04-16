<?php 
include "config.php";	#connect to database
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$secondname=$_POST['secondname'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobileno'];
	$rollno=$_POST['rollno'];
	$gender=$_POST['gender'];
	$designation=$_POST['designation'];
	$skill=implode(",", $_POST['skill']);
	$level=$_POST['level'];
	$username=$_POST['username'];
	$password=sha1($_POST['password']);
	$cpassword=sha1($_POST['cpassword']);

	if(empty($password) || empty($cpassword))
	{
		echo "<script>alert('Please fill the password field');</script>";
	}
	elseif($password == $cpassword)
	{
		#query to find all
		$query="insert into user (firstname,secondname,email,mobileno,rollno,gender,designation,skill,level,username,password) values('$firstname','$secondname','$email','$mobileno','$rollno','$gender','$designation','$skill','$level','$username','$password')";

		$execute=mysqli_query($con,$query);		#executing query

		if($execute)
		{
			header("location:display.php");		#redirecting to display.php
		}
		else
		{
			echo "some error may occured";
		}
		}
	else
	{
		echo "<script type='text/javascript'>alert('passwords didnt match')</script>";
	}
}
else
{
	header("location:index.php");    #redirecting to display.php
}

?>
