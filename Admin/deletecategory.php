<?php
include("config.php");
if(isset($_GET["categoryid"]))
{
    $categoryid=$_GET["categoryid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblrubbercategory where categoryid= $categoryid");
    
        echo "<script>window.location='categoryview.php'</script>";	
			
}
?>