<?php
/*
Template Name: Contact Submit
*/
?>

<?php
// if the fake url field is empty, submit the form
if(isset($_POST['url']) && $_POST['url'] == ''){
	$field_name = $_POST['form_name'];
	$field_email = $_POST['form_email'];
	$field_requests = $_POST['form_requests'];
	
	$mail_to = 'sara@sarafaithalterman.com';
	$subject = '**Sarafaithalterman.com visitor: '.$field_name;
	
	$body_message  = 'Name: '.$field_name."\n";
	$body_message .= 'Email: '.$field_email."\n";
	$body_message .= 'Message: '.$field_requests."\n";
	
	$headers  = 'From: webform@sarafaithalterman.com';
	// $headers .= 'Subject: test';
	// $headers .= 'To: sara@sarafaithalterman.com';
	
	$mail_status = mail($mail_to, $subject, $body_message, $headers);
	
	
	// if sent successfully, draw the page
	if ($mail_status) { ?>

	<?php get_header(); ?>


					<?php
					if (have_posts()):
						while (have_posts()): the_post(); ?>

							<div class="wrapper contactFix">
								<div class="thankYou">
									<h1>Thank You For Your Message!</h1>
									<div class="goBack">
										<h2>
											<a href="<?php echo home_url(); ?>">Go Back&raquo;</a>
										</h2>
									</div>		
								</div><!-- /selectedWorks -->
							</div><!-- /wrapper -->

							<?php endwhile;

							else: 
								echo '<p>No Content Found<p>';

							endif;
						?>

	<?php get_footer(); ?>
		
	<?php
	}
	//if delivery fails, draw error message
	else { ?>
	
		<?php get_header(); ?>

						<?php
						if (have_posts()):
							while (have_posts()): the_post(); ?>

								<div class="wrapper contactFix">
									<div class="thankYou">
										<h1>Sorry, delivery failed. Please try again later.</h1>
										<div class="goBack">
											<h2>
												<a href="<?php echo home_url(); ?>">Go Back&raquo;</a>
											</h2>
										</div>		
									</div><!-- /selectedWorks -->
								</div><!-- /wrapper -->

								<?php endwhile;

								else: 
									echo '<p>No Content Found<p>';

								endif;
							?>

		<?php get_footer(); ?>
	
	<?php
	}
}
// if the fake field isn't empty, draw fake page
else { ?>

	<?php get_header(); ?>

						<?php
						if (have_posts()):
							while (have_posts()): the_post(); ?>

								<div class="wrapper contactFix">
									<div class="thankYou">
										<h1>Thank You For Your Message!</h1>
										<div class="goBack">
											<h2>
												<a href="<?php echo home_url(); ?>">Go Back&raquo;</a>
											</h2>
										</div>		
									</div><!-- /selectedWorks -->
								</div><!-- /wrapper -->

								<?php endwhile;

								else: 
									echo '<p>No Content Found<p>';

								endif;
							?>

		<?php get_footer(); ?>

<?php } ?>