<?php
/**
* Plugin Name: i-Aspect Default
* Plugin URI: http://i-aspect.com/
* Description: i-Aspect default plugin for custom post types. Use with i-Aspect Default theme
* Version: 1.0
* Author: Stefan verweij
* Author URI: http://stefanverweij.com/
**/

// Add menu item
include 'iasd-addmenu.php';
include 'iasd-type-options.php';
include 'iasd-social-options.php';
include 'iasd-input-examples.php';
include 'iasd-theme-options.php';
include 'iasd-advanced-setup.php';

// Add custom styles
/*include 'iasd-menu-styles.php';
include 'iasd-theme-styles.php';*/

// Add shortcodes
$social_options = get_option ( 'iasd_theme_social_options' );
include 'iasd-shortcodes.php';

// Add quicktags
include 'iasd-quicktags.php';

// Set the custom post types
if($display_options['toggle_nieuws']){
    include 'iasd-type-nieuws.php';
    add_action( 'init', 'register_cpt_iaspect_default_nieuws', 0 );
};

if($display_options['toggle_blog']){
    include 'iasd-type-blog.php';
    add_action( 'init', 'register_cpt_iaspect_default_blog', 0 );
};

if($display_options['toggle_projecten']){
    include 'iasd-type-projects.php';
    add_action( 'init', 'register_cpt_iaspect_default_projects', 0 );
};

// Init color picker
add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('colorpicker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

function wptuts_options_enqueue_scripts() {
    wp_register_script( 'iasd-upload', get_template_directory_uri() .'../../../plugins/iasd-plugin/iasd-upload.js', array('jquery','media-upload','thickbox') );
    if ( 'i-aspect-default_page_iasd_theme_theme_options' == get_current_screen() -> id ) {
        wp_enqueue_script('jquery');

        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');

        wp_enqueue_script('media-upload');
        wp_enqueue_script('iasd-upload');
    }

}
add_action('admin_enqueue_scripts', 'wptuts_options_enqueue_scripts');

function iasd_options_setup() {
    global $pagenow;
 
    if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {
        // Now we'll replace the 'Insert into Post Button' inside Thickbox
        add_filter( 'gettext', 'replace_thickbox_text'  , 1, 3 );
    }
}
add_action( 'admin_init', 'iasd_options_setup' );
function replace_thickbox_text($translated_text, $text, $domain) {
    if ('Insert into Post' == $text) {
        $referer = strpos( wp_get_referer(), 'iasd-settings' );
        if ( $referer != '' ) {
            return __('Stel in als logo', 'iasd' );
        }
    }
    return $translated_text;
}

// Add the custom post types

//Add taxonomy
/*function projects_taxonomy() {
    register_taxonomy(
        'project',
        'projecten',
        array(
            'hierarchical' => true,
            'label' => 'Projecttype',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'projecttype',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'projects_taxonomy');*/

add_action( 'init', 'add_projects_to_query');

// Remove default post type
wp_delete_post(1, true);
wp_delete_post(2, true);
add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
	remove_menu_page('edit.php');
}

