
<?php
include("config.php");
if (isset($_GET["bookingid"])) {
  $bookingid = $_GET["bookingid"];
  // echo $category_id;
  // exit;
  $sql = mysqli_query($con, "SELECT * from tblrubberbooking WHERE bookingid='$bookingid'");
  $display = mysqli_fetch_array($sql);
}
?>



<?php
if (isset($_POST["submit"])) {
  $bookingid = $_POST["bookingid"];
  $textarea = $_POST["response"];



  $sql = mysqli_query($con, "UPDATE tblrubberbooking SET bookingstatus='$textarea' WHERE bookingid='$bookingid'");
  if ($sql) {
    echo "<script>alert('Category updated sucsessfullly!!!');window.location='request.php';</script>";
  }
}

?>

<a href="https://colorlib.com/wp/templates/"><img src="https://colorlib.com/wp/wp-content/uploads/sites/2/colorlib-push-logo.png" alt="Colorlib logo"></a>
<h1 style="text-align:center;">Thank you for using our template!</h1>
<p style="text-align:center;">For more awesome templates please visit <strong><a href="https://colorlib.com/wp/templates/">Colorlib</a></strong>.</p>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>
