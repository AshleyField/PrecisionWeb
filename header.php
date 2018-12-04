<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Precision Web - <?php the_title(); ?></title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/minified/lightbox.min.css">

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">
</head>
<body>

	<div class="wrapper">
		<nav>
			<div class="mobile-nav">
				<div class="bars">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					<a href="/">
						<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/precision-web.png" alt="">
					</a>
				</div>
				<ul class="navigation" data-nav="close">
					<li>
						<a href="/" <?php if(is_page('home')){ echo 'class="active"'; }; ?>>Home</a>
					</li>
					<li>
						<a href="/about" <?php if(is_page('about')){ echo 'class="active"'; }; ?>>About</a>
					</li>
					<li>
						<a href="/our-work" <?php if(is_page('our-work')){ echo 'class="active"'; }; ?>>Our Work</a>
					</li>
					<li>
						<a href="/team" <?php if(is_page('team')){ echo 'class="active"'; }; ?>>Team</a>
					</li>
					<li>
						<a href="/services" <?php if(is_page('services')){ echo 'class="active"'; }; ?>>Services</a>
					</li>
					<li>
						<a href="/contact" <?php if(is_page('contact')){ echo 'class="active"'; }; ?>>Contact</a>
					</li>
				</ul>
			</div>
			<div class="desktop-nav">
				<ul class="navigation">
					<li>
						<a href="/" <?php if(is_page('home')){ echo 'class="active"'; }; ?>>Home</a>
					</li>
					<li>
						<a href="/about" <?php if(is_page('about')){ echo 'class="active"'; }; ?>>About</a>
					</li>
					<li>
						<a href="/our-work" <?php if(is_page('our-work')){ echo 'class="active"'; }; ?>>Our Work</a>
					</li>

					<li>
						<a href="/" id="home-link" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/precision-web-icon.png')"></a>
					</li>
					<li>
						<a href="/team" <?php if(is_page('team')){ echo 'class="active"'; }; ?>>Team</a>
					</li>
					<li>
						<a href="/services" <?php if(is_page('services')){ echo 'class="active"'; }; ?>>Services</a>
					</li>
					<li>
						<a href="/contact" <?php if(is_page('contact')){ echo 'class="active"'; }; ?>>Contact</a>
					</li>
				</ul>
			</div>		
		</nav>

		<?php wp_head(); ?>