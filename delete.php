<?php 
include "config.php";	#database connectivity

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="delete from register where id='".$id."'";   #query to delete the user

	$exe=mysqli_query($con,$query);		#executing Query

	if($exe)
	{
		header("location:display.php");  #redirecting to display.php
	}
	else
	{
		echo "<script>alert('deletion failed');</script>";   #alert msg
	}	
}
else
{ 
	header("location:display.php");  	#redirecting to display.php
}

 ?>