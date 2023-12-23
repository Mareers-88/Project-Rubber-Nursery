<?php
include("config.php");
if(isset($_GET["rubberplantid"]))
{
    $rubberplantid=$_GET["rubberplantid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblrubberplant where rubberplantid= $rubberplantid");
    
        echo "<script>window.location='productview.php'</script>";	
			
}
?>