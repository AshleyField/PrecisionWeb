<?php 

	function register_resources(){

		//register a slide
		$arg = array(
			'labels' => array(
				'name'=> 'Services',
				'singular_name' => 'Service',
				'menu_name' => 'Services'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('services',$arg);


	}

	add_action('init','register_resources');



	
	
 ?>
