<?php get_header(); ?>

		<div class="banner" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/banner-image.jpg');">
			<div class="banner-inner">
				<h1>Beautiful websites made with precision.</h1>
				<div class="banner-logo">
					<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/precision-web.png" alt="">
				</div>
			</div>
		</div>
		<section id="services">
			<div class="section-inner">
				<div class="section-heading">
					<h1>Services</h1>
				</div>
				<div class="col-3-container">
					<?php

						// The Query

						$args = array('post_type'=>'services');
						$the_query = new WP_Query( $args );

						// The Loop

						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							
							get_template_part('content','services');
						}

						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<section id="our-work">
			<div class="section-inner">
			<div class="section-heading">
				<h1>Our Work</h1>
			</div>
			<div class="col-3-container">
				<?php
					// The Query

					$args = array('post_type'=>'work');
					$the_query = new WP_Query( $args );

					// The Loop

					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						
						get_template_part('content','work');
					}

					/* Restore original Post Data */
					wp_reset_postdata();
				?>
			</div>
			<div class="all-work-button main-button">
				<a href="/our-work">View all work</a>
			</div>
		</div>
		</section>
		<section id="clients">
			<div class="section-inner">
			<div class="section-heading">
				<h1>Our Clients</h1>
			</div>
			<div class="col-4-container">
				<?php
					// The Query

					$args = array('post_type'=>'clients');
					$the_query = new WP_Query( $args );

					// The Loop

					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						
						get_template_part('content','clients');
					}

					/* Restore original Post Data */
					wp_reset_postdata();
				?>
			</div>
		</div>
		</section>
		
		<?php get_footer(); ?>