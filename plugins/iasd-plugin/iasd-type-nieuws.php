<?php
function register_cpt_iaspect_default_nieuws() {
			$labels = array(
				'name' => __( 'Nieuws' ),
				'singular_name' => __( 'Nieuws' ),
				'menu_name' => __('Nieuws'),
                'parent_item-colon' => __('Parent Nieuws artikel'),
                'all_items' => __('Alle Nieuws artikelen'),
                'view_item' => __('Bekijk Nieuws artikel'),
                'add_new_item' => __('Nieuws artikel toevoegen'),
                'add_new' => __('Voeg Nieuws artikel toe'),
                'edit_item' => __('Pas Nieuws artikel aan'),
                'search_items' => __('Zoek in Nieuws artikelen'),
                'not_found' => __('Geen Nieuws artikelen gevonden')
			);
	$args = array(
		'label'               => __( 'nieuws'),
		'description'         => __( 'nieuws artikelen'),
		'labels'              => $labels,
		
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats',),
		'taxonomies'          => array( 'nieuws' ),
		
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-aside',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite'             => true,
	);
	register_post_type( 'Nieuws', $args );

}
?>