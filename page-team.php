<?php 
get_header();

?>

<section id="team-page">
	<div class="section-inner">

		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>

				<div class="section-heading">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="section-content">
					<?php the_content(); ?>
				</div>
				<div class="team-inner">
				<?php }
			}
			?>
			
			

			<?php
	// The Query

			$args = array('post_type'=>'team');
			$the_query = new WP_Query( $args );

	// The Loop

			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				
				get_template_part('content','team-member');	

			}

			/* Restore original Post Data */
			wp_reset_postdata(); ?>
			
		</div>
	</div>
	
</section>

<?php get_footer();

?>