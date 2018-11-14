<div class="col-3-item">
	<div class="service-item">
		<div class="service-item-image">
			<img src="<?php the_field('image');?>" alt="">
		</div>
		<div class="service-item-heading">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="service-item-content">
			<p><?php the_content(); ?></p>
		</div>
		<div class="service-item-button main-button">
			<a href="<?php the_permalink(); ?>">More Info</a>
		</div>
	</div>
</div>
