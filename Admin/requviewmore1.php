<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body >
<?php
include("header.php");
include("config.php");
 $bookid=$_GET['bookingid'];
 echo $bookid;
$result=mysqli_query($con,"SELECT * FROM tblrubberbooking a inner join tblrubbercustomer b on a.customerid=b.customerid 
inner join tblrubberplant c on a.rubberplantid=c.rubberplantid and a.bookingid='$bookid'");
$row=mysqli_fetch_array($result);
?>
<form action="" style="padding-top: 7%;" method="post">
  <div class="container" style="margin-left:400px; margin-bottom:5%;padding-left:-25px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;padding-top:5%;background-image:url(images/account-bg.jpg)">
    <h2 style="text-align: center;margin-left: 1%;margin-bottom: -8%;margin-top: -5%;font-family: fantasy;">
	<?php echo $row['rubberplant'] ?></h2>
    <br>
    <div class="row" >
      <div class="col-md-9" style="margin-top: 14%;
    margin-left: 6%;"> <img src="../Admin/images/<?php echo $row['productimage'] ?>" width="400px" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:  3%;"/> </div>
      <div class="col-md-6" style="margin-top: -37%;
    margin-left: 60%;">
        <!-- <input type="hidden" value="<?php echo $p_id?>" name="hiddenpid" /> -->
        <br />
        <br />
        <br />
        <p style="color:black;font-size: larger;margin-top: 75px;">Customer Name</p>
        <p style="color:green"><b>
          <?php  echo $row['customername']?>
          </b> </p>
          
        <!-- <p style="color:black;font-size: larger;">Unit Amount:</p>
        <p style="color:green"><b> -->
          <!-- <?php  echo $row['amount']?> -->
          <!-- </b> </p> -->
      
        <p style="color:black;font-size: larger;">Booking Date:</p>

        <p style="color:green"><b>
          <?php  echo $row['bookingdate']?>
           </b> </p>
          
      
          
           <input type="hidden" value=" <?php echo $row['customername']?>"  name="cname" id="cname" class="form-control" />
           <input type="hidden" value=" <?php echo $row['emailid']?>"  name="email" id="email" class="form-control" />
           <input type="hidden" value=" <?php echo $row['amount']?>"  name="txtprice" id="txtprice" class="form-control" />
		    <!--<input type="hidden" value=" <?php echo $row['quantityc']?>"  name="txtstock" id="txtstock" class="form-control" />-->
          
        <p style="color:black">Quantity:</p>
        <p style="color:green"><b>
          <?php  echo $row['quantityc']?>
           </b> </p>
        <!-- <script>
		function funcation1(){	
			
		var qtys=document.getElementById("txtqty").value;
		var qty=parseInt(qtys);
		var prices=document.getElementById("txtprice").value;
		var price=parseInt(prices);
		
		
			var total=qty*price;
			document.getElementById("totamt").value=total;
		
		}
		</script> -->
         <p style="color:black">Total amount:</p>
         <p style="color:green"><b>
          <?php  echo $row['total']?>
           </b> </p>
           <!-- <p style="color:black">Feedback:</p>
           <p style="color:green">
          <input type="text" name="feedback" value=""  class="form-control" style="width: 201px;" autofocus  required/>
        </p> -->
        <br />
        <input type="submit" name="Accept" value="Accept" class="btn btn-success"  />
        <input type="submit" name="Reject" value="Reject" class="btn btn-danger" />
      </div>
    </div>
    <br />
  </div>
  </div>
</form>
</body>
</html>
<?php
include("config.php");
if(isset($_POST["Accept"]))
{
$bookid=$_GET["bookingid"];
// $feed=$_POST['feedback'];
$emailaddress=$_POST['email'];echo $emailaddress;
$con_name=$_POST['cname'];echo $con_name;

$sql1=mysqli_query($con,"UPDATE tblrubberbooking SET bookingstatus='Accepted' WHERE bookingid='$bookid'");
	if($sql1)
	{
	echo "<script>alert('Request Accepted!!');window.location='request.php';</script>";
	}
}
elseif(isset($_POST["Reject"]))
{
$bookid=$_GET["bookingid"];
$sql1=mysqli_query($con,"UPDATE tblrubberbooking SET bookingstatus='Rejected' WHERE bookingid='$bookid'");
	if($sql1)
	{
		echo "<script>alert('Request Rejected!!');window.location='request.php';</script>";
	}
}
?>
<?php
include("footer.php");
?>