
<?php
session_start();
include("config.php");
if(isset($_POST["btnlogin"]))
{
	$emailid=$_POST["txtemailid"];
	$password=$_POST["txtpassword"];
$result=mysqli_query($con,"SELECT * from tblrubbercustomer WHERE emailid='$emailid' AND password ='$password'  ");
$row=mysqli_fetch_array($result);
if($row>0)
{
	$_SESSION["cid"]=$row["customerid"];
    // echo $_SESSION["cid"];

	
	  echo "<script>alert('Logined!!');window.location='../Customer/categorypage.php'</script>";

}
else
{
	echo "<script>alert('Invalid Username/Password!!');window.location='customerlogin.php'</script>";
}	
}
?>

