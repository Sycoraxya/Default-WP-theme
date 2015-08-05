<?php 
add_action('admin_init', 'iasd_initialize_advanced_setup');
function iasd_initialize_advanced_setup(){
    if( false == get_option('iasd_theme_advanced_setup')){
        add_option('iasd_theme_advanced_setup');
    }
    
    add_settings_section(
        'advanced_setup_section',
        'Advanced Setup',
        'iasd_advanced_setup_callback',
        'iasd_theme_advanced_setup'
    );
    
    add_settings_field(
        'nieuws_archief_pagina',
        'Nieuws Archief Pagina ID',
        'iasd_nieuws_archief_pagina_callback',
        'iasd_theme_advanced_setup',
        'advanced_setup_section'
    );
    
    add_settings_field(
        'blog_archief_pagina',
        'Blog Archief Pagina ID',
        'iasd_blog_archief_pagina_callback',
        'iasd_theme_advanced_setup',
        'advanced_setup_section'
    );
    
    add_settings_field(
        'projecten_archief_pagina',
        'Projecten Archief Pagina ID',
        'iasd_projecten_archief_pagina_callback',
        'iasd_theme_advanced_setup',
        'advanced_setup_section'
    );
    
    register_setting(
        'iasd_theme_advanced_setup',
        'iasd_theme_advanced_setup'
    );
}

function iasd_advanced_setup_callback(){
    echo '<p>Advanced Setup options for Default theme</p>';
}

function iasd_nieuws_archief_pagina_callback(){
    $options = get_option( 'iasd_theme_advanced_setup' );
    echo '<input type="text" id="nieuws_archief" name="iasd_theme_advanced_setup[nieuws_archief]" value="'. $options[ 'nieuws_archief' ] .'" />';
}
function iasd_blog_archief_pagina_callback(){
    $options = get_option( 'iasd_theme_advanced_setup' );
    echo '<input type="text" id="blog_archief" name="iasd_theme_advanced_setup[blog_archief]" value="'. $options[ 'blog_archief' ] .'" />';
}
function iasd_projecten_archief_pagina_callback(){
    $options = get_option( 'iasd_theme_advanced_setup' );
    echo '<input type="text" id="projecten_archief" name="iasd_theme_advanced_setup[projecten_archief]" value="'. $options[ 'projecten_archief' ] .'" />';
}
$advanced_setup = get_option ( 'iasd_theme_advanced_setup' );
?>