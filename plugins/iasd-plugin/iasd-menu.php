<?php
// Add menu item
add_action('admin_menu', 'add_settings_menu_iasd_plugin');

function add_settings_menu_iasd_plugin(){
    $page_title = 'i-Aspect Default Options';
    $menu_title = 'i-Aspect Default';
    $capability = 'manage_options';
    $menu_slug = 'iasd-plugin';
    $function = 'iasd_default_options';
    $icon_url = '';
    add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);
}


/**
 * Callback function to the add_theme_page
 * Will display the theme options page
 */ 
function iasd_default_options()
{
?>
    <div class="section panel">
      <h1>i-Aspect Default Options</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
        <?php 
          settings_fields('iasd_theme_options'); 
        
          do_settings_sections('iasd_theme_options.php');
        ?>
            <p class="submit">  
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
            </p>  
            
      </form>
    </div>
    <?php
}
/**
 * Register the settings to use on the theme options page
 */
add_action( 'admin_init', 'iasd_register_settings' );

/**
 * Function to register the settings
 */
function iasd_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'iasd_theme_options', 'iasd_theme_options', 'iasd_validate_settings' );

    // Add settings section
    add_settings_section( 'iasd_text_section', 'Post type settings', 'iasd_display_section', 'iasd_theme_options.php' );

    // Create textbox field
    $field_args = array(
      'type'      => 'checkbox',
      'id'        => 'iasd_checkbox',
      'name'      => 'iasd_checkbox',
      'desc'      => 'Example of textbox description',
      'std'       => '',
      'label_for' => 'iasd_textbox',
      'class'     => 'css_class'
    );
    
    /*HOW TO USE 
    $options = get_option( 'iasd_theme_options' ); // name of register_settings function
    echo $options['iasd_textbox']; // name of the option*/

    add_settings_field( 'example_textbox', 'Example Checkbox', 'iasd_display_setting', 'iasd_theme_options.php', 'iasd_text_section', $field_args );
}
/**
 * Function to add extra text to display on each section
 */
function iasd_display_section($section){ 

}
/**
 * Function to display the settings on the page
 * This is setup to be expandable by using a switch on the type variable.
 * In future you can add multiple types to be display from this function,
 * Such as checkboxes, select boxes, file upload boxes etc.
 */
function iasd_display_setting($args)
{
    extract( $args );

    $option_name = 'iasd_theme_options';

    $options = get_option( $option_name );

    switch ( $type ) {  
          case 'text':  
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";  
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break; 
          case 'checkbox': 
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='checkbox' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";  
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break; 
    }
}
/**
 * Callback function to the register_settings function will pass through an input variable
 * You can then validate the values and the return variable will be the values stored in the database.
 */
function iasd_validate_settings($input)
{
  foreach($input as $k => $v)
  {
    $newinput[$k] = trim($v);
    
    // Check the input is a letter or a number
    if(!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
      $newinput[$k] = '';
    }
  }

  return $newinput;
}
