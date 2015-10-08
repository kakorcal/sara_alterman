<?php get_header(); ?>
	<?php
	if (have_posts()):
		while (have_posts()): the_post(); ?>

		<div class="wrapper">
			<div class="pgTitle">
				<h1><?php the_title(); ?></h1>
			</div><!-- /selectedWorks -->

			<div class="row footerFix">
				<div class="col col-sara-1">
					<div class="singleIMG"><?php the_post_thumbnail('aboutSara'); ?></div>
					<?php $get_description = get_post(get_post_thumbnail_id())->post_excerpt;				
					    if(!empty($get_description)){//If description is not empty show the div
					    echo '<p class="bioCredit">' . get_post(get_post_thumbnail_id())->post_excerpt . '</p>';
					  } else  {
					  	echo '<p class="bioCredit">' . " " . '</p>'; 
					  }
					?>	
				</div><!-- /col-sara-6 -->
				<div class="col col-sara-2">
					<?php the_content(); ?>

					<?php
					// Get $post if you're inside a function
					global $post;
					$my_excerpt = get_the_excerpt();

					if ( has_excerpt( $post->ID ) ) {
					    // This post has excerpt ?>
					    <div class="readMore">
					    	<a href="<?php echo $my_excerpt; ?>" target="_blank"><h1>READ MORE</h1></a>
					    </div><!-- /readMore -->
					<?php } else {
					    // This post has no excerpt
					    echo ''; 
					}
					?>
				
				</div><!-- /col col-sara-6 -->
			</div><!-- /row -->
		</div><!-- /wrapper -->

		<?php endwhile;
		else: 
			echo '<p>No Content Found<p>';
		endif;
	?>
<?php get_footer(); ?>
