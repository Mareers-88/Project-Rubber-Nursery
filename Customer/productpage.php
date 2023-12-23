<?php
include("config.php");
include("header.php");

?>
<div class="gallery" id="gallery">
	<div class="container">
		<h3 class="title-w3l">Product <span>View</span></h3>
		<?php
		$categoryid = $_GET["categoryid"];

		$sql = mysqli_query($con, "SELECT * FROM tblrubberplant where categoryid='$categoryid'");

		?>



		<?php
		while ($display = mysqli_fetch_array($sql)) {
		?>

			<div class="w3layouts_gallery_grids">

				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">

					<div class="w3layouts_news_grid">
						<a href="productpagemore.php?rubberplantid=<?php echo $display['rubberplantid']; ?>"><img class="img-responsive mix-in" style="width: 92%;
    height: 204px;" src="../Admin/images/<?php echo $display["productimage"] ?>" alt="">
						</a>

						<h3 style="text-transform: capitalize;text-align: center;"><?php echo $display["rubberplant"] ?></h3>
					</div>

				</div>

			<?php
		}
			?>

			</div>
	</div>
</div>
</div>
</div>
<?php
include("footer.php");
?>