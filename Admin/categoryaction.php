<?php
include("config.php");
$category=$_POST["txtcategory"];
$description=$_POST["txtdescription"];
$loc= "images/";
$img=$_FILES['txtcategoryimage'] ['name'];
move_uploaded_file($_FILES['txtcategoryimage']['tmp_name'],$loc.$img);
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tblrubbercategory WHERE category='$category'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{

	echo"<script>alert('Category Details alraedy exist');window.location='categoryview.php'</script>";
}
else
{
$save=mysqli_query($con,"insert into tblrubbercategory(category,description,categoryimage)values('$category','$description','$img')");

echo "<script>alert('Category Registration Successfull!!!'); window.location='categoryview.php'</script>";
}


?>
//end