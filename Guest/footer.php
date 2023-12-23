<section class="footer-w3">
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-agile1" data-aos="zoom-in">
				<h3>About Us</h3>
				<p class="footer-p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ligula ac metus finibus hendrerit sed at libero. Praesent
					blandit dignissim elit, vel feugiat nulla porta a. Praesent tellus eros, consectetur quis tortor at, tempor varius quam.
					</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-agile1" data-aos="zoom-in">
				<h3>Latest Tweets</h3>
				<ul class="tweet-agile">
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> sit amet consectetur adipiscing. <a href="#">http://ax.by/zzzz</a></p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> sit amet consectetur adipiscing. <a href="#">http://cx.dy/zzzz</a></p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="zoom-in">
				<h3>Instagram Posts</h3>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f5.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f6.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- //footer section -->
	<!-- copyright -->
	<div class="w3layouts_copy_right">
		<div class="container">
			<p>© 2017 Garden Care. All rights reserved | Design by <a href="adminlogin.php">Admin.</a></p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-scripts -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->
	<!-- js for navigation -->
	<script src="js/classie.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/main.js"></script>
	<!-- //js for navigation -->
	<!-- js for gallery -->
	<script src="js/lsb.min.js"></script>
	<script>
		$(window).load(function () {
			$.fn.lightspeedBox();
		});
	</script>
	<!-- //js for gallery -->
	<!-- search-scripts -->
	<script src="js/uisearch.js"></script>
	<script>
		new UISearch(document.getElementById('sb-search'));
	</script>
	<!-- //search-scripts -->
	<!-- for-middle-section -->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- //for-middle-section -->
	<!-- pricing-tablel -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pricing-tablel -->
	<!-- clients-slider-script -->
	<script src="js/slideshow.min.js"></script>
	<script src="js/launcher.js"></script>
	<!-- //clients-slider-script -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- //js-scripts -->

</body>

</html>