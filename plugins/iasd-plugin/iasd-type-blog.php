<?php
function register_cpt_iaspect_default_blog() {
			$labels = array(
				'name' => __( 'Blog' ),
				'singular_name' => __( 'Blog' ),
				'menu_name' => __('Blog'),
                'parent_item-colon' => __('Parent Blog'),
                'all_items' => __('Alle Blog artikelen'),
                'view_item' => __('Bekijk Blog artikel'),
                'add_new_item' => __('Blog artikel toevoegen'),
                'add_new' => __('Voeg Blog artikel toe'),
                'edit_item' => __('Pas Blog artikel aan'),
                'search_items' => __('Zoek in Blog artikelen'),
                'not_found' => __('Geen Blog artikelen gevonden')
			);
	$args = array(
		'label'               => __( 'blog'),
		'description'         => __( 'Blog artikelen voor op een blog'),
		'labels'              => $labels,
		
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats',),
		'taxonomies'          => array( 'blog' ),
		
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-page',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite'             => true,
	);
	register_post_type( 'Blog', $args );

}


?>