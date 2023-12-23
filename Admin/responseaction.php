<?php
session_start();
include("config.php");


	// session_start();
	// $cid=$_SESSION["cid"];
	$bookingid=$_SESSION['bid'];

    $textarea=$_POST["response"];
	echo $textarea;
    $sql=mysqli_query($con,"UPDATE `tblrubberbooking` SET `bookingstatus`='$textarea'  WHERE bookingid=$bookingid ");
		//echo "<script>alert('Response Sent Successfully!!');window.location='request.php'</script>";


		
	
    ?>
		
	
    