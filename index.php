<?php get_header(); ?> 	

	<div class="wrapper">
		<div class="selectedWorks">
			<a href="#selectedWorks"  name="selectedWorks"><h1>SELECTED WORKS</h1></a>
		</div><!-- /selectedWorks -->

			<div class="row">
				<?php
				$the_query = new WP_Query('category_name=selected-works');
				while ( $the_query->have_posts() ) :
						$the_query->the_post(); ?>
					
					<div class="col col-md-4 col-sm-6">
						<div class="thumb-div">
							<a href="<?php the_permalink(); ?>">									
								<?php the_post_thumbnail('selectedWorks'); ?>
								<h1 class="thumb-title">
									<div class="thumb-inline">
										<?php the_title(); ?>	
									</div><!-- /thumb-inline -->
								</h1>
							</a>
						</div><!-- /thumb-div -->
					</div><!-- /col col-md-4 col-sm-6 -->
			
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div><!-- /row -->

		<div class="aboutSara">
			<a href="#aboutSara"  name="aboutSara"><h1>ABOUT SARA</h1></a>
		</div><!-- /aboutSara -->

			<div class="row">
				<div class="col col-sara-1">
					<div class="singleIMG"><?php the_post_thumbnail('aboutSara'); ?></div>
					<?php $get_description = get_post(get_post_thumbnail_id())->post_excerpt;				
					    if(!empty($get_description)){//If description is not empty show the div
					    echo '<p class="bioCredit">' . get_post(get_post_thumbnail_id())->post_excerpt . '</p>'; ?>
					 <?php } else { ?>
					  	<div class="nobioCredit"></div><!-- /nobioCredit -->
					<?php  }
					?>	
				</div><!-- /col-sara-6 -->
				<div class="col col-sara-2">
					<?php the_content(); ?>
				</div><!-- /col col-sara-6 -->
			</div><!-- /row -->

		<div class="requestWorks">
			<a href="#requestWorks"  name="requestWorks"><h1>REQUEST WORK</h1></a>
		</div><!-- /requestWorks -->

		<form id="contact-form" action="<?php echo site_url(); ?>/contact-submit" method="post">
			<div class="userInfo">
				<h1>Name</h1><input type="text" name="form_name" id="name" maxlength="90">
				<h1>Email</h1><input type="text" name="form_email" id="email" maxlength="90">

				<div class="fakefield">
				    Leave this field empty please; it is for spam protection
				    <input type="text" name="url"/>
				</div>

				<h1 id="comments">Comments</h1><textarea name="form_comments" cols="30" rows="3" maxlength="1200"></textarea>
				<!-- submit -->
				 	<div class="submit">								    		 		
				 		<input type="submit" value="SUBMIT" id="contact-btn">	
				 	</div>
				<!-- /submit -->
			</div><!-- /userInfo -->
		</form>

	</div><!-- /wrapper -->

<?php get_footer(); ?>