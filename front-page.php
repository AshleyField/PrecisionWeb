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
				<div class="col-3-item">
					<div class="work-item">
						<div class="work-item-image">
							<img src="assets/images/our-work-barfoot.png" alt="">
						</div>
						<div class="work-item-overlay">
							<div class="overlay-title">
								<h2>Bafroot & Thompson</h2>
							</div>
							<div class="overlay-blurb">
								Barfoot & Thompson Takapuna Branch needed a website to list their commercial listings. This custom Wordpress website displays extenisve information and allows for lots of customisation.
							</div>
							<div class="overlay-button main-button">
								<a href="">More Info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3-item">
					<div class="work-item">
						<div class="work-item-image">
							<img src="assets/images/our-work-auckland-fence.png" alt="">
						</div>
						<div class="work-item-overlay">
							<div class="overlay-title">
								<h2>Auckland Fence</h2>
							</div>
							<div class="overlay-blurb">
								Blah Blah
							</div>
							<div class="overlay-button main-button">
								<a href="">More Info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3-item">
					<div class="work-item">
						<div class="work-item-image">
							<img src="assets/images/our-work-hand-institute.png" alt="">
						</div>
						<div class="work-item-overlay">
							<div class="overlay-title">
								<h2>Hand Institute</h2>
							</div>
							<div class="overlay-blurb">
								Blah Blah
							</div>
							<div class="overlay-button main-button">
								<a href="">More Info</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="all-work-button main-button">
				<a href="">View all work</a>
			</div>
		</div>
		</section>
		<section id="clients">
			<div class="section-inner">
			<div class="section-heading">
				<h1>Our Clients</h1>
			</div>
			<div class="col-4-container">
				<div class="col-4-item">
					<div class="client-logo">
						<a href="">
							<img src="assets/images/company-logo-barfoot-and-thompson.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="col-4-item">
					<div class="client-logo">
						<a href="">
							<img src="assets/images/company-logo-auckland-fence.png" alt="">
						</a>
					</div>
				</div>
				<div class="col-4-item">
					<div class="client-logo">
						<a href="">
							<img src="assets/images/company-logo-bos-electrical.png" alt="">
						</a>
					</div>
				</div>
				<div class="col-4-item">
					<div class="client-logo">
						<a href="">
							<img src="assets/images/company-logo-hand-institute.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		</section>
		
		<?php get_footer(); ?>