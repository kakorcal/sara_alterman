
	<footer class="mainFooter singleFooter">
		<div class="wrapper">
			<div class="sara-footer clearfix">

				<div class="footer-title">
					<a href="<?php echo home_url(); ?>">
						<h1 class="footerDesk">Sara<br>Faith<br>Alterman</h1>
						<h1 class="footerMobile">Sara Faith Alterman</h1>
					</a>
				</div><!-- /footer-title -->
				
				<div class="footer-nav clearfix">

					<?php if (is_single()||is_page('contact-submit')) {?> 
						<ul>
							<li><a href="<?php echo home_url(); ?>/#selectedWorks">WORK SAMPLES</a></li>
							<li><a href="<?php echo home_url(); ?>/#aboutSara">ABOUT SARA</a></li>
							<li><a href="<?php echo home_url(); ?>/#requestWorks">REQUEST WORK</a></li>
						</ul>
<!-- 						<div class="legalText">
							<p>LEGAL TEXT</p>
							<p>REITERATE SOCIAL MEDIA?</p>
						</div> --><!-- /legalText -->
					<?php }else {?>
						<ul>
							<li><a href="#selectedWorks">WORK SAMPLES</a></li>
							<li><a href="#aboutSara">ABOUT SARA</a></li>
							<li><a href="#requestWorks">REQUEST WORK</a></li>
						</ul>
					<?php } ?>
				</div><!-- /footer-nav -->
			</div><!-- /sara-footer -->
		</div><!-- /wrapper -->
	</footer>

	<?php wp_footer(); ?>
</body>
</html>