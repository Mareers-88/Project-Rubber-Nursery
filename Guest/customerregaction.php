<?php
include("config.php");
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST['txtcustomername'];
	$phonenumber=$_POST['txtphonenumber'];
	$district=$_POST['drpdistrict'];

    $emailid=$_POST['txtemailid'];
	$password=$_POST['txtpassword'];
	$housename=$_POST['txthousename'];

    $sql=mysqli_query($con,"SELECT count(*) as count FROM tblrubbercustomer WHERE emailid='$emailid'");
  		$display=mysqli_fetch_array($sql);
  		if($display['count']>0)
		{
			
		echo "<script>alert('Already exist');window.location='customerreg.php'</script>";	
		}
		else 
		{
$sql=mysqli_query($con,"INSERT INTO `tblrubbercustomer`( `customername`, `emailid`, `password`, `phonenumber`, `housename`) VALUES ('$name','$emailid','$password','$phonenumber','$housename')");

	if($sql)
	{
		//echo"<script>alert('Details registered sucessfully!!');window.location='../Guest/index.php'</script>";
		echo"<script>alert('Details registered sucessfully!!');window.location='../Guest/customerlogin.php'</script>";

	}
	
}
}
?>