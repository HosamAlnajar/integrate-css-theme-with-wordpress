
				<!--footer-->
				<div class="buttom-w3">
				<div class="container">
				<div class=" bottom-head text-center">
		  <h2><a href="index.html">Blissful</a></h2>
		  <div class="buttom-para">
		  <p>Lorem ipsum dolor sit amet,iste natus error sit voluptatem</p>
		  <p>Vivamus sed porttitor felis</p>
		  </div>
		</div>
<div class=" text-center">
			   <div class="post">
            <form action="#" method="post">
			  
			         <div class="letter">
					<input class="email" type="email" placeholder="Your email..." required="">
					</div>
					<div class="newsletter">
					<input type="submit" value="Subscribe">
					</div>
				</form>
</div>
          </div>
				</div>
				<div class=" copyright text-center">
			    			<div class="icons">
							<ul>
								<li><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li><a href="#"><span class="fa fa-rss"></span></a></li>
								<li><a href="#"><span class="fa fa-vk"></span></a></li>
							</ul>
						</div>

			</div>
				</div>
				
				<footer>
				<p>  &copy; 2018 Blissful. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
	</footer>


	<!--js working-->
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js  working-->

			<!--  light box js -->
		<script src="<?php bloginfo('template_url');?>/js/lightbox-plus-jquery.min.js"> </script> 
		<!-- //light box js--> 
		<!-- banner-->
<script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
		<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager: true,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
<!--// banner-->
	<!--scripts-->
	<script src="<?php bloginfo('template_url');?>/js/jquery.countdown.js"></script>
	<!--countdowntimer-js-->
	<script src="<?php bloginfo('template_url');?>/js/script.js"></script>
	<!--countdowntimer-js-->
	<!--//scripts-->
	
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/move-top.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>