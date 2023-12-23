<?php
include("header.php");
?>
<?php
include("config.php");
?>
<div class="contact" id="mail">
	<div class="container">
		<h3 class="title-w3l">Sign <span>Up</span></h3>
		<div class="map-pos">



			<div class="clearfix"> </div>
		</div>
		<form action="customerregaction.php" method="post">
			<div class="col-sm-6 contact-left">
				<input type="text" name="txtcustomername" placeholder="Your Name" required="">
				<br><br>
				<input type="text" name="txtphonenumber" placeholder="Mobile Number" required="">

				<br><br>
				<?php

				$sql = mysqli_query($con, "select * from tbldistrict");
				?>
				<select id="drpdistrict" name="drpdistrict" class="form-control" style="width:500px;">
					<option value="0">---Select---</option>
					<?php
					while ($row = mysqli_fetch_array($sql)) {
					?>
						<option value="<?php echo $row['districtid'] ?>"> <?php echo $row['district']; ?> </option>
					<?php
					}
					?>
				</select>



					<input type="email" name="txtemailid" placeholder="Email" required="">
					<input type="text" name="txtpassword" placeholder="Password" required="">
			</div>
			<div class="col-sm-6 contact-right">
				<textarea name="txthousename" placeholder="Housename" required=""></textarea>

				<input type="submit" name="btnsubmit" value="Submit">
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
<?php
include("footer.php");
?>