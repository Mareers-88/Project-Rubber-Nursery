<?php
include("config.php");
if(isset($_POST["reject"]))
{

	$bookingid=$_SESSION['bid'];
		// $_SESSION['bid']=$display["bookingid"]

    // $bookingid=$_SESSION['bid'];
	// echo "$y";

	$sql=mysqli_query($con,"UPDATE `tblrubberbooking` SET `bookingstatus`='a'  WHERE bookingid=$bookingid");
	if($sql)
	{
		echo"<script>alert('Student Details Rejected succesfully!!');window.location=''</script>";
	} 
	else
	{
		echo mysqli_error($con);
	}
}
?>