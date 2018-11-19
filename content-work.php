<div class="col-3-item">
	<div class="work-item">
		<div class="work-item-image">
			<img src="<?php the_field('image'); ?>" alt="">
		</div>
		<div class="work-item-overlay">
			<div class="overlay-title">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="overlay-blurb">
				<?php the_field('short_description'); ?>
			</div>
			<div class="overlay-button main-button">
				<a href="<?php the_permalink(); ?>">More Info</a>
			</div>
		</div>
	</div>
</div>