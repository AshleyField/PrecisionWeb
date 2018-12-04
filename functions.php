<?php 

	function register_resources(){

		//register services
		$arg = array(
			'labels' => array(
				'name'=> 'Services',
				'singular_name' => 'Service',
				'menu_name' => 'Services'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon' => 'dashicons-list-view',
		);
		register_post_type('services',$arg);

		//register our work
		$arg = array(
			'labels' => array(
				'name'=> 'Work',
				'singular_name' => 'Work',
				'menu_name' => 'Work'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon'   => 'dashicons-tagcloud',
		);
		register_post_type('work',$arg);

		//register our work
		$arg = array(
			'labels' => array(
				'name'=> 'Clients',
				'singular_name' => 'Client',
				'menu_name' => 'Clients'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon'   => 'dashicons-groups',
		);
		register_post_type('clients',$arg);

		//register team
		$arg = array(
			'labels' => array(
				'name'=> 'Team',
				'singular_name' => 'Team',
				'menu_name' => 'Team'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon'   => 'dashicons-universal-access',
		);
		register_post_type('team',$arg);



	}

	add_action('init','register_resources');



	
	
 ?>
