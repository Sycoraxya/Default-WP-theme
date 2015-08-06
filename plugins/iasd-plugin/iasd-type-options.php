<?php
/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */
 
/**
 * Initializes the theme options page by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */
add_action('admin_init', 'iasd_initialize_theme_options');
function iasd_initialize_theme_options() {
     if( false == get_option( 'iasd_theme_display_options' ) ) {  
        add_option( 'iasd_theme_display_options' );
    } // end if
    // First, we register a section. This is necessary since all future options must belong to one.
    add_settings_section(
        'iasd_general_settings_section',         // ID used to identify this section and with which to register options
        'Type Options',         // Title to be displayed on the administration page
        'iasd_general_options_callback',    // Callback used to render the description of the section
        'iasd_theme_display_options'                           // Page on which to add this section of options
    );
    add_settings_field(
        'toggle_nieuws',
        'Toggle Nieuws',
        'iasd_toggle_nieuws_callback',
        'iasd_theme_display_options',
        'iasd_general_settings_section',
        array(
            'Activeer om nieuws items toe te voegen.'
        )
    );
    add_settings_field(
        'toggle_blog',
        'Toggle Blog',
        'iasd_toggle_blog_callback',
        'iasd_theme_display_options',
        'iasd_general_settings_section',
        array(
            'Activeer om blog items toe te voegen.'
        )
    );
    add_settings_field(
        'toggle_projecten',
        'Toggle Projecten',
        'iasd_toggle_projecten_callback',
        'iasd_theme_display_options',
        'iasd_general_settings_section',
        array(
            'Activeer om projecten toe te voegen.'
        )
    );
    register_setting(
        'iasd_theme_display_options',
        'iasd_theme_display_options'
    );
    
    
} // end sandbox_initialize_theme_options
 
/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */
 
/**
 * This function provides a simple description for the General Options page. 
 *
 * It is called from the 'sandbox_initialize_theme_options' function by being passed as a parameter
 * in the add_settings_section function.
 */
function iasd_general_options_callback() {
    echo '<p>Selecteer de posttypes die u wilt gebruiken</p>';
} // end iasd_general_options_callback
  

/* ------------------------------------------------------------------------ *
 * Setting Callbacks
 * ------------------------------------------------------------------------ */    
/**
 * This function renders the interface elements for toggling the visibility of the header element.
 * 
 * It accepts an array of arguments and expects the first element in the array to be the description
 * to be displayed next to the checkbox.
 */
function iasd_toggle_blog_callback($args) {
        // First, we read the options collection
    $default = array('');
    $theme_options = get_option( 'iasd_theme_display_options', $default );
    $options = wp_parse_args($options, $default);
     
    // Next, we update the name attribute to access this element's ID in the context of the display options array
    // We also access the show_header element of the options collection in the call to the checked() helper function
    $html = '<input type="checkbox" id="toggle_blog" name="iasd_theme_display_options[toggle_blog]" value="1" ' . checked(1, $options['toggle_blog'], false) . '/>'; 
     
    // Here, we'll take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="toggle_blog"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_header_callback
function iasd_toggle_nieuws_callback($args) {
             // First, we read the options collection
    $default = array('');
    $theme_options = get_option( 'iasd_theme_display_options', $default );
    $options = wp_parse_args($options, $default);
     
    // Next, we update the name attribute to access this element's ID in the context of the display options array
    // We also access the show_header element of the options collection in the call to the checked() helper function
    $html = '<input type="checkbox" id="toggle_nieuws" name="iasd_theme_display_options[toggle_nieuws]" value="1" ' . checked(1, $options['toggle_nieuws'], false) . '/>'; 
     
    // Here, we'll take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="toggle_nieuws"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_header_callback
function iasd_toggle_projecten_callback($args) {
             // First, we read the options collection
    $default = array('');
    $theme_options = get_option( 'iasd_theme_display_options', $default );
    $options = wp_parse_args($options, $default);
     
    // Next, we update the name attribute to access this element's ID in the context of the display options array
    // We also access the show_header element of the options collection in the call to the checked() helper function
    $html = '<input type="checkbox" id="toggle_projecten" name="iasd_theme_display_options[toggle_projecten]" value="1" ' . checked(1, $options['toggle_projecten'], false) . '/>'; 
     
    // Here, we'll take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="toggle_projecten"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_header_callback
$default = array('');
$theme_options = get_option( 'iasd_theme_display_options', $default );
$options = wp_parse_args($options, $default);
?>