
<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
include("config.php");
session_start();
// $_SESSION["cid"]=$row["customerid"];

?>
<form action="" method="post" enctype="multipart/form-data">
<div class="container" style="width:100%;margin-left:260px;margin-bottom:10%;padding-top:7%;">
<div class="row">
    <div class="col-md-9" style="box-shadow:2px 2px 10px #1b93e1;border-radius:0px; top: 14px;">
    <div class="row" style="margin-left: -173%;margin-top:2%; margin-bottom:-5%;">
    

    </div>
    <h2 style="text-align:center;margin-top:6%;font-family:fantasy;">Status Report</h2>
    <div class="form-horizontal" style="margin-left:0px">
<table class="table table-hover" style="border:2px solid #adaaaa; box-shadow:3px 3px 11px #777777;margin-bottom:7%">
<th>#</th>
<th>Rubberplant Name</th>
<th>Customer Name</th>
<th>Quantity</th>
<th>Amount</th>
<th>Status</th>
<!-- <th>Feedback</th> -->


<?php
$s=1;
$categoryid = $_GET["customerid"];
$sql=mysqli_query($con,"select * from tblrubberplant p,tblrubbercustomer c,tblrubberbooking b where b.customerid=c.customerid and p.rubberplantid=b.rubberplantid and c.customerid='$customerid'");
while($display=mysqli_fetch_array($sql))

{
    echo "<tr>";
    echo "<td>".$s++."</td>";
    echo "<td>".$display["rubberplant"]."</td>";
    echo "<td>".$display["customername"]."</td>";
    echo "<td>".$display["quantityc"]."</td>";
    echo "<td>".$display["total"]."</td>";
    echo "<td>".$display["bookingstatus"]."</td>";
    // echo "<td>".$display["Feedback"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>

    </div>
</div>
       
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>