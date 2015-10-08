<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- <div class="mock"></div> -->

		<?php if (is_single()||is_page('contact-submit')) {?> 
		<header class="singlePG">
			<div class="wrapper">
				<div class="singleHeader clearfix">
					<div class="singleTitle">
						<a href="<?php echo home_url(); ?>">
							<h1 class="singleDesk">Sara<br>Faith<br>Alterman</h1>
							<h1 class="singleMobile">Sara Faith Alterman</h1>
						</a>
					</div><!-- /singleTitle -->

					<div class="singleNav">
						<ul> 
							<li><a href="<?php echo home_url(); ?>/#selectedWorks">WORK SAMPLES</a></li>
							<li><a href="<?php echo home_url(); ?>/#aboutSara">ABOUT SARA</a></li>
							<li><a href="<?php echo home_url(); ?>/#requestWorks">REQUEST WORK</a></li>						
						</ul>
					</div><!-- /singleNav -->
					
				</div><!-- /singleHeader -->
			</div>
		</header>
			
		<?php }else {?>
		<header>
			<div class="wrapper">
				<div class="sara">
					<a href="<?php echo home_url(); ?>">
						<h1>Sara<br>Faith<br>Alterman</h1>
					</a>
				</div><!-- /sara -->

				<div class="notch">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/images/notch.png" alt="Sara Alterman"></a>
				</div><!-- /notch -->
			</div>
		</header>
		<?php } ?>
			
	