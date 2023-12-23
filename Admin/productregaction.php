<?php
include("config.php");
session_start();
    $categoryid=$_SESSION['category'];
$rubberplant=$_POST["txtrubberpalnt"];
$quantity=$_POST["txtquantity"];
$amount=$_POST["txtamount"];
$postdate=$_POST["txtpostdate"];
$plantgrowth=$_POST["txtplantgrowth"];
$description=$_POST["txtdescription"];
$loc= "images/";
$img=$_FILES['txtproductimage'] ['name'];
move_uploaded_file($_FILES['txtproductimage']['tmp_name'],$loc.$img);

$save=mysqli_query($con,"INSERT INTO `tblrubberplant`(`categoryid`, `rubberplant`, `quantity`, `amount`, `postdate`, `plantgrowth`, `description`,`productimage`) VALUES ('$categoryid','$rubberplant','$quantity','$amount','$postdate','$plantgrowth','$description','$img')");
echo "<script>alert('Plant Registration Successfull!!!'); window.location='productview.php'</script>";


?>