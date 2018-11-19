<?php 

	get_header();

?>

<div class="wrapper">

	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>

				<section>
					<div class="section-inner">
						<div class="section-heading">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="section-content">
							<?php the_content(); ?>
						</div>
					</div>
					
				</section>
			<?php }
		}
		?>

	
</div>

<?php

	get_footer();
 ?>