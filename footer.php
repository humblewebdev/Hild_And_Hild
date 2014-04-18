<button class="btn btn-contactus">Contact Us</button>

	</div>
	<!-- END content_wrapper -->
<footer>
		<div class="wrapper">
	 			<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
	     			<img class="img-responsive" alt=""
						src="<?php bloginfo('template_directory'); ?>/images/Hild_Hild_footer_logo.png">
				</div>
			
			
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Twitter Feed') ) : ?>  
     		<?php endif; ?> 
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Menu') ) : ?>  
     		<?php endif; ?> 
			<!--
				<li class="footer_menu_header">Useful links</li>
				<li class="footer_quicklink"><a href="#"><span>></span>Home</a></li>
				<li class="footer_quicklink"><a href="#"><span>></span>Services</a></li>
				<li class="footer_quicklink"><a href="#"><span>></span>Who We Are</a></li>
				<li class="footer_quicklink"><a href="#"><span>></span>Client Access</a></li>
				<li class="footer_quicklink"><a href="#"><span>></span>Resources</a></li>
				<li class="footer_quicklink"><a href="#"><span>></span>Contact Us</a></li>-->

			<ul class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<li class="footer_menu_header">Contact info</li>
				<li class="menu-item"><h2>Address</h2>
					<p>70 NE Loop 410 Suite 180</p>
					<p>San Antonio, Texas 78216</p></li>
				<li class="menu-item"><h2>Phone number:</h2>
					<p>1-210-366-0888</p></li>
				<li class="menu-item"><h2>E-mail</h2>
					<p>Info@awesome-site.com</p> <a href="#"><i class="foundicon-facebook"></i></a><a href="#"><i class="foundicon-twitter"></i></a><a href="#"><i class="foundicon-linkedin"></i></a>
					</li>
			</ul>
		</div>
		<div class="clear"></div>
	</footer>
</body>
</html>