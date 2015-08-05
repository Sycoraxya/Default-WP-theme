<?php
function iasd_theme_menu() {
 
    add_menu_page(
        'i-Aspect Default',
        'i-Aspect Default',
        'administrator',
        'iasd_theme_menu',
        'iasd_theme_display',
        'dashicons-welcome-widgets-menus'
    );
    
    add_submenu_page(
        'iasd_theme_menu',
        'Type Options',
        'Type Options',
        'administrator',
        'iasd_theme_display_options',
        'iasd_theme_display'
    );
    
    add_submenu_page(
        'iasd_theme_menu',
        'Contact & Social Media',
        'Contact & Social Media',
        'administrator',
        'iasd_theme_social_options',
        create_function( null, 'iasd_theme_display( "social_options");')
    );
    
/*    add_submenu_page(
        'iasd_theme_menu',
        'Input Examples',
        'Input Examples',
        'administrator',
        'iasd_theme_input_examples',
        create_function( null, 'iasd_theme_display( "input_examples" );')
    );*/
    
    add_submenu_page(
        'iasd_theme_menu',
        'Theme Options',
        'Theme Options',
        'administrator',
        'iasd_theme_theme_options',
        create_function( null, 'iasd_theme_display( "theme_options" );')
    );
    
    add_submenu_page(
        'iasd_theme_menu',
        'Advanced Setup',
        'Advanced Setup',
        'administrator',
        'iasd_theme_advanced_setup',
        create_function( null, 'iasd_theme_display( "advanced_setup" );')
    );
 
} // end sandbox_example_theme_menu
add_action('admin_menu', 'iasd_theme_menu');
 
function iasd_theme_display( $active_tab = null ) {
?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">
 
        <!-- Add the icon to the page -->
        <div id="icon-themes" class="icon32"></div>
        <h2>i-Aspect Default Options </h2>
        
        <!-- Tabbed Nav -->
        <?php
            if( isset( $_GET[ 'tab' ] ) ) {
                $active_tab = $_GET[ 'tab' ];
            } else if( $active_tab == 'social_options' ) {
                $active_tab = 'social_options';
            } else if( $active_tab == 'input_examples'){
                $active_tab = 'input_examples';   
            } else if( $active_tab == 'advanced_setup'){
                $active_tab = 'advanced_setup';
            } else if( $active_tab == 'theme_options'){
                $active_tab = 'theme_options';  
            } else {
                $active_tab = 'type_options';
            }// end if/else
        ?>
        <h2 class="nav-tab-wrapper">
            <a href="?page=iasd_theme_display_options" class="nav-tab <?php echo $active_tab == 'type_options' ? 'nav-tab-active': ''; ?>">Type Options</a>
            <a href="?page=iasd_theme_social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active': ''; ?>">Contact & Social Media</a>
           <!-- <a href="?page=iasd_theme_input_examples" class="nav-tab <?php echo $active_tab == 'input_examples' ? 'nav-tab-active': ''; ?>">Theme</a>-->
            <a href="?page=iasd_theme_theme_options" class="nav-tab <?php echo $active_tab == 'theme_options' ? 'nav-tab-active': ''; ?>">Theme Options</a>
            <a href="?page=iasd_theme_advanced_setup" class="nav-tab <?php echo $active_tab == 'advanced_setup' ? 'nav-tab-active': ''; ?>">Advanced Setup</a>
        </h2>
        <!-- Make a call to the WordPress function for rendering errors when settings are saved. -->
        <?php settings_errors(); ?>
 
        <!-- Create the form that will be used to render our options -->
        <form method="post" action="options.php" enctype="multipart/form-data">
        <?php
            if( $active_tab == 'type_options' ){
                settings_fields( 'iasd_theme_display_options' ); 
                do_settings_sections( 'iasd_theme_display_options' ); 
            } else if( $active_tab == 'social_options') {
                settings_fields( 'iasd_theme_social_options' ); 
                do_settings_sections( 'iasd_theme_social_options' ); 
            } else if( $active_tab == 'input_examples') {
                settings_fields('iasd_theme_input_examples' );
                do_settings_sections( 'iasd_theme_input_examples' );
            } else if( $active_tab == 'theme_options') {
                settings_fields('iasd_theme_theme_options' );
                do_settings_sections( 'iasd_theme_theme_options' );  
            } else {
                settings_fields('iasd_theme_advanced_setup' );
                do_settings_sections( 'iasd_theme_advanced_setup' );
            }
            submit_button(); 
        ?>
        </form>
 
    </div><!-- /.wrap -->
<?php
} // end sandbox_theme_display
?>