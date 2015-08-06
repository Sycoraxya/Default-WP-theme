<?php
add_action('admin_init', 'iasd_initialize_themestyle_options');
function iasd_initialize_themestyle_options(){
    if( false == get_option('iasd_theme_theme_options')){
        add_option('iasd_theme_theme_options');
    }
    
    add_settings_section(
        'theme_options_section',
        'Theme Options',
        'iasd_theme_options_callback',
        'iasd_theme_theme_options'
    );
        
    add_settings_field(
        'general_settings',
        '<strong style="font-size:1.5em"> General </strong>',
        'iasd_general_settings_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'logo_upload',
        'Logo',
        'iasd_logo_upload_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );

    add_settings_field(
        'background_color',
        'Background',
        'iasd_background_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'menu_background',
        'Menu Background',
        'iasd_menu_background_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'menu_items',
        'Menu items',
        'iasd_menu_items_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'button_color',
        'Button BG Color',
        'iasd_button_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'button_hover',
        'Button Hover Color',
        'iasd_button_hover_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'button_font_color',
        'Button Font Color',
        'iasd_button_font_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'cta_color',
        'Call to action Color',
        'iasd_cta_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );

    add_settings_field(
        'cta_bg_color',
        'Call to action bg color',
        'iasd_cta_bg_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'cta_hover_color',
        'Call to action Hover color',
        'iasd_cta_hover_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'search_bg_color',
        'Search button bg color',
        'iasd_search_bg_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'search_hover_color',
        'Search button Hover color',
        'iasd_search_hover_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'service_icons',
        'Service Icons',
        'iasd_service_icons_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'service_icon_bg',
        'Service Icons Background',
        'iasd_service_icon_bg_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'content_settings',
        '<strong style="font-size:1.5em"> Content </strong>',
        'iasd_content_settings_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'title_overlay_bg',
        'Title Overlay Background',
        'iasd_title_overlay_bg_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'title_overlay_text',
        'Title Overlay Text',
        'iasd_title_overlay_text_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );

    add_settings_field(
        'toggle_overlay_shadow',
        'Toggle Overlay Shadow',
        'iasd_toggle_overlay_shadow_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'headerh1_color',
        'Header h1 Color',
        'iasd_headerh1_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'headerh2_color',
        'Header h2 Color',
        'iasd_headerh2_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );

    add_settings_field(
        'headerh3_color',
        'Header h3 Color',
        'iasd_headerh3_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );

    add_settings_field(
        'link_color',
        'Link Color',
        'iasd_link_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'text_color',
        'Text Color',
        'iasd_text_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'footer_settings',
        '<strong style="font-size:1.5em"> Footer </strong>',
        'iasd_footer_settings_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'footer_bg_color',
        'Footer Background Color',
        'iasd_footer_bg_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'footer_header_color',
        'Footer Header Color',
        'iasd_footer_header_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'footer_link_color',
        'Footer Link Color',
        'iasd_footer_link_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    add_settings_field(
        'footer_text_color',
        'Footer Text Color',
        'iasd_footer_text_color_callback',
        'iasd_theme_theme_options',
        'theme_options_section'
    );
    
    register_setting(
        'iasd_theme_theme_options',
        'iasd_theme_theme_options'
    );
};


function iasd_theme_options_callback(){
    echo '<p>Theme options for Default theme</p>';
}

function iasd_general_settings_callback(){
}

function iasd_logo_upload_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    ?>
    <input type="text" id="logo_url" name=iasd_theme_theme_options[logo_upload] value="<?php echo $options['logo_upload']; ?>" />
    <input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'iasd' ); ?>" />
    <img src="<?php echo $options['logo_upload']; ?>" style="  max-width: 150px;  max-height: 40px;  float: left;  margin-right: 10px;" />
    <?php
    
    
}
function iasd_background_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="background_color" name=iasd_theme_theme_options[background_color] value="'. $options['background_color'] .'" class="colorpicker" data-default-color="#ffffff"/>';
}
function iasd_menu_background_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="menu_background" name=iasd_theme_theme_options[menu_background] value="'. $options['menu_background'] .'" class="colorpicker" data-default-color="#1fb25a"/>';
}
function iasd_menu_items_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="menu_items" name=iasd_theme_theme_options[menu_items] value="'. $options['menu_items'] .'"  class="colorpicker" data-default-color="#ffffff"/>';
}
function iasd_button_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="button_color" name=iasd_theme_theme_options[button_color] value="'. $options['button_color'] .'"  class="colorpicker" data-default-color="#1fb25a"/>';
}
function iasd_button_hover_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="button_hover" name=iasd_theme_theme_options[button_hover] value="'. $options['button_hover'] .'"  class="colorpicker" data-default-color="#21c468"/>';
}
function iasd_button_font_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="button_font_color" name=iasd_theme_theme_options[button_font_color] value="'. $options['button_font_color'] .'"  class="colorpicker" data-default-color="#ffffff"/>';
}
function iasd_cta_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="cta_color" name=iasd_theme_theme_options[cta_color] value="'. $options['cta_color'] .'"  class="colorpicker" data-default-color="#ffffff"/>';
}
function iasd_cta_bg_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="cta_bg_color" name=iasd_theme_theme_options[cta_bg_color] value="'. $options['cta_bg_color'] .'"  class="colorpicker" data-default-color="#ef0908"/>';
}
function iasd_cta_hover_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="cta_hover_color" name=iasd_theme_theme_options[cta_hover_color] value="'. $options['cta_hover_color'] .'"  class="colorpicker" data-default-color="#ff2828"/>';
}
function iasd_search_bg_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="search_bg_color" name=iasd_theme_theme_options[search_bg_color] value="'. $options['search_bg_color'] .'"  class="colorpicker" data-default-color="#455560"/>';
}
function iasd_search_hover_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="search_hover_color" name=iasd_theme_theme_options[search_hover_color] value="'. $options['search_hover_color'] .'"  class="colorpicker" data-default-color="#64727a"/>';
}
function iasd_service_icons_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="service_icons" name=iasd_theme_theme_options[service_icons] value="'. $options['service_icons'] .'"  class="colorpicker" data-default-color="#ffffff"/>';
}
function iasd_service_icon_bg_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="service_icon_bg" name=iasd_theme_theme_options[service_icon_bg] value="'. $options['service_icon_bg'] .'"  class="colorpicker" data-default-color="#1fb25a"/>';
}
function iasd_content_settings_callback(){
}
function iasd_title_overlay_bg_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="title_overlay_bg" name=iasd_theme_theme_options[title_overlay_bg] value="'. $options['title_overlay_bg'] .'"  class="colorpicker" data-default-color="#1fb25a"/>';
}
function iasd_title_overlay_text_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    echo '<input type="text" id="title_overlay_text" name=iasd_theme_theme_options[title_overlay_text] value="'. $options['title_overlay_text'] .'"  class="colorpicker" data-default-color="#ffffff"/>';
}
function iasd_toggle_overlay_shadow_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    $html = '<input type="checkbox" id="toggle_overlay_shadow" name="iasd_theme_theme_options[toggle_overlay_shadow]" value="1"' . checked( 1, $options['toggle_overlay_shadow'], false ) . '/>';
    
    echo $html;
}
function iasd_headerh1_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="headerh1_color" name="iasd_theme_theme_options[headerh1_color]" value="'.$options['headerh1_color'].'" class="colorpicker" data-default-color="#1fb25a" />';
}
function iasd_headerh2_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="headerh2_color" name="iasd_theme_theme_options[headerh2_color]" value="'.$options['headerh2_color'].'" class="colorpicker" data-default-color="#1fb25a" />';
}
function iasd_headerh3_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="headerh3_color" name="iasd_theme_theme_options[headerh3_color]" value="'.$options['headerh3_color'].'" class="colorpicker" data-default-color="#1fb25a" />';
}
function iasd_link_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="link_color" name="iasd_theme_theme_options[link_color]" value="'.$options['link_color'].'" class="colorpicker" data-default-color="#1fb25a" />';
}
function iasd_text_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="text_color" name="iasd_theme_theme_options[text_color]" value="'.$options['text_color'].'" class="colorpicker" data-default-color="#5b5b5b" />';
}
function iasd_footer_settings_callback(){
}
function iasd_footer_bg_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="footer_bg_color" name="iasd_theme_theme_options[footer_bg_color]" value="'.$options['footer_bg_color'].'" class="colorpicker" data-default-color="#191919" />';
}
function iasd_footer_header_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="footer_header_color" name="iasd_theme_theme_options[footer_header_color]" value="'.$options['footer_header_color'].'" class="colorpicker" data-default-color="#1FB25A" />';
}
function iasd_footer_link_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="footer_link_color" name="iasd_theme_theme_options[footer_link_color]" value="'.$options['footer_link_color'].'" class="colorpicker" data-default-color="#1FB25A" />';
}
function iasd_footer_text_color_callback(){
    $default = array('');
    $options = get_option( 'iasd_theme_theme_options', $default );
    $options = wp_parse_args($options, $default);
    
    echo '<input type="text" id="footer_text_color" name="iasd_theme_theme_options[footer_text_color]" value="'.$options['footer_text_color'].'" class="colorpicker" data-default-color="#cccccc" />';
}
$default = array('');
$theme_options = get_option( 'iasd_theme_theme_options', $default );
$theme_options = wp_parse_args($theme_options, $default);

?>