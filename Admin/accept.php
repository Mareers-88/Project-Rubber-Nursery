<?php
include("config.php");
if(isset($_POST["accept"]))
{
	$bookingid=$_SESSION['bid'];

	$con_name=$_POST['txt_studname'];
	$emailaddress=$_POST['txt_studemail'];
	// echo $s_id;
	$sql=mysqli_query($con,"update tblrubberbooking set bookingstatus='1' where bookingid='$bookingid'");

		$bodyContent="Dear $con_name, <br> Your application has been accepted.";

	$mailtoaddress=$emailaddress;
	require ('Mailtemplate.php');

	if($sql)
	{
		echo"<script>alert('Student Details Accepted succesfully!!');window.location='viewstudent.php'</script>";
	} 
	else
	{
		echo mysqli_error($con);
	}
}
?>

