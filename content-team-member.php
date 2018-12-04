<div class="team-member">
	<div class="team-member-name">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="team-member-position">
		<p><?php the_field('team_position'); ?></p>
	</div>
	<div class="team-member-image">
		<img src="<?php the_field('team_image'); ?>" alt="">
	</div>
	<div class="quote-and-bio">
		<div class="team-member-bio">
			<?php the_content(); ?>
		</div>
		<div class="team-member-quote">
			<h2>Favourite Quote:</h2>
			<div class="team-member-quote-inner">
				<i class="fas fa-quote-left"></i>
				<p><?php the_field('team_quote'); ?></p>
			</div>
			
		</div>
	</div>
</div>