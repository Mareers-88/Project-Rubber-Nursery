<?php

include("config.php");
if(isset($_POST["btn-add"]))
{
	session_start();
	$cid=$_SESSION["cid"];
	$date=date("Y/m/d");
	$rubberplantid=$_POST["txtrubberplantid"];
	$quantity=$_POST["txtqty"];
	// $uamount=$_POST['unitamount'];
	$amount=$_POST['txtamount'];
	$status="pending";
	//$famount=$_POST['salesamount'];
	$total=$_POST['totamt'];
	
	

	// if($quantity>0)
	// {
	
	//echo $id;
	//echo $quantity;
	
	// $sql=mysqli_query($con,"SELECT * FROM tblrubberbooking WHERE customerid='$cid' and rubberplantid='$rubberplantid'");
  	// $display=mysqli_fetch_array($sql);
		
	// 	if($display["count"]>0)
	// 	{
			// $current_qty=$display["quantity"];
			// $new_qty=$current_qty+$quantity;
			// $total=$new_qty*$amount;
			
			// $sql=mysqli_query($con,"update tblbooking set quantity='$new_qty', totalamount='$total' where customerid='$id' and foodid='$foodid'");
			// 	if($sql)
			// 		{
			// 		echo "<script>alert('Booking updated!!');window.location='index.php'</script>";
			// 		}
		//}
		//else
		//{
		$sql=mysqli_query($con,"INSERT INTO `tblrubberbooking`(`bookingdate`, `customerid`, `rubberplantid`, `quantityc`, `amount`, `Total`, `bookingstatus`) 
		VALUES ('$date','$cid','$rubberplantid','$quantity','$amount','$total','$status')");
		echo "<script>alert('Add to Booking Successfully!!');window.location='statusview.php'</script>";


		//}
	}
	else
	{
	echo "<script>alert('Enter Valid Quantity!!');window.location='#'</script>";
	}

?>
