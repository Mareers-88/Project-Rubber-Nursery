<?php
include("config.php");
if (isset($_POST[ "btnlogin"]))
{
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	$result=mysqli_query($con, "SELECT * from tblrubberadminlogin WHERE username='$username' AND password='$password'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		echo"<script>alert('Admin Login Sucessfull!!');window.location='../Admin/index.php'</script>";

		
		
	}
	else
	{
	echo"<script>alert('Invalid Username/Password!!');window.location='adminlogin.php'</script>";
    }
    }
    ?>