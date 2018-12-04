<?php

if(get_field('single_banner_image')){ ?>
	<div class="single-banner" style="background-image: url('<?php the_field('single_banner_image'); ?>');"></div>
<?php } ?>



<div class="work-single-wrapper">
	<section id="work-single">
		<div class="section-inner">
			<div class="section-heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="work-single-subheading">
				<h2><?php the_field('subheading') ?></h2>
			</div>
			<div class="work-single-column">
				<div class="work-single-mockup">
					<img src="<?php the_field('mockup_image'); ?>" alt="">
				</div>
			</div>
			<div class="work-single-column">
				<div class="work-single-information">
					<span>URL: </span><a href="<?php the_field('url'); ?>" target="_blank"><?php the_field('url'); ?></a>
					<p><span>Platform: </span><?php the_field('platform'); ?></p>
					<p><span>Project Requirements: </span><?php the_field('work_type'); ?></p>
				</div>
				<div class="work-single-description">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php 
		$images = acf_photo_gallery('work_gallery', $post->ID);
   			

    	if(count($images)) { ?>
			<section id="work-single-gallery">
				<div class="section-inner">
					<div class="section-heading">
						<h1>Gallery</h1>
					</div>

					<div class="work-gallery">
		    			<?php get_template_part('content','work-gallery'); ?>
					</div>
				</div>
			</section>
	<?php } ?>
</div>
