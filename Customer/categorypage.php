<?php
include("header.php");


?>

	<!-- //banner -->
	<!-- about -->
	<div class="about-w3l" id="about">
		<div class="container">
        <h2 class="title-w3l">Category <span>View</span></h2>
        <?php   
        include("config.php");
         $sql = mysqli_query($con, "SELECT * FROM tblrubbercategory");
         
         ?>


			
            <?php
            while ($display = mysqli_fetch_array($sql)) 
            {
            ?>
			<div class="col-md-4 col-xs-4 col-news-top">
				<div class="date-in">
				<a href="productpage.php?categoryid=<?php echo $display['categoryid']; ?>">	<img class="img-responsive mix-in"  src="../Admin/images/<?php echo $display["categoryimage"] ?>" alt="">
				</a>	
			</div>
				<div class="text-about ab-agile1">
					<h4><?php echo $display["category"] ?></h4>
				</div>
			</div>
            <?php
                 }
            ?>

			
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
    	
<?php
include("footer.php");
?>