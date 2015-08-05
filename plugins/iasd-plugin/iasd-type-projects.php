<?php function register_cpt_iaspect_default_projects() {
			$labels = array(
				'name' => __( 'Projecten' ),
				'singular_name' => __( 'Project' ),
				'menu_name' => __('Projecten'),
                'parent_item-colon' => __('Parent Project'),
                'all_items' => __('Alle Projecten'),
                'view_item' => __('Bekijk Project'),
                'add_new_item' => __('Project toevoegen'),
                'add_new' => __('Voeg Project toe'),
                'edit_item' => __('Pas Project aan'),
                'search_items' => __('Zoek in Projecten'),
                'not_found' => __('Geen Projecten gevonden')
			);
	$args = array(
		'label'               => __( 'projecten'),
		'description'         => __( 'Projecten voor in portfolio'),
		'labels'              => $labels,
		
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats',),
		'taxonomies'          => array( 'project' ),
		
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-tools',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite'             => true,
	);
	register_post_type( 'Projecten', $args );

}
?>