<?php
add_action( 'admin_init', 'iasd_theme_initialize_input_examples' );
function iasd_theme_initialize_input_examples() {
    if( false == get_option( 'iasd_theme_input_examples' ) ) {
        add_option( 'iasd_theme_input_examples' );
    } // end if
    
    add_settings_section(
        'input_examples_section',
        'Input Examples',
        'iasd_input_examples_callback',
        'iasd_theme_input_examples'
    );
    
    add_settings_field(
        'Input Element',
        'Input Element',
        'iasd_input_element_callback',
        'iasd_theme_input_examples',
        'input_examples_section'
    );
    
    add_settings_field(
        'Textarea Element',
        'Textarea Element',
        'iasd_textarea_element_callback',
        'iasd_theme_input_examples',
        'input_examples_section'
    );
    
    add_settings_field(
        'Checkbox Element',
        'Checkbox Element',
        'iasd_checkbox_element_callback',
        'iasd_theme_input_examples',
        'input_examples_section'
    );
    
    register_setting(
        'iasd_theme_input_examples',
        'iasd_theme_input_examples',
        'iasd_theme_validate_input_examples'
    );
    
    function iasd_input_examples_callback() {
        echo '<p>Provides examples of the five basic element types.</p>';
    }
    
    function iasd_input_element_callback() {
        $options = get_option( 'iasd_theme_input_examples' );
        
        // Render output
        echo '<input type="text" id="input_example" name="iasd_theme_input_examples[input_example]" value="'. $options[ 'input_example' ] .'" />';
    }
    function iasd_textarea_element_callback() {

        $options = get_option( 'iasd_theme_input_examples' );

        // Render the output
        echo '<textarea id="textarea_example" name="iasd_theme_input_examples[textarea_example]" rows="5" cols="50">' . $options[ 'textarea_example' ] . '</textarea>';
    }   
    function iasd_checkbox_element_callback() {
        $options = get_option( 'iasd_theme_input_examples' );
        
        $html = '<input type="checkbox" id="checkbox_example" name="iasd_theme_input_examples[checkbox_example]" value="1"' . checked( 1, $options['checkbox_example'], false ) . '/>';
        $html .= '<label for="checkbox_example">This is an example of a checkbox</label>';
        
        echo $html;
    }
    
    function iasd_theme_validate_input_examples( $input ){
         
    // Create our array for storing the validated options
    $output = array();
     
    // Loop through each of the incoming options
    foreach( $input as $key => $value ) {
         
        // Check to see if the current option has a value. If so, process it.
        if( isset( $input[$key] ) ) {
         
            // Strip all HTML and PHP tags and properly handle quoted strings
            $output[$key] = strip_tags( stripslashes( $input[ $key ] ) );
             
        } // end if
         
    } // end foreach
     
    // Return the array processing any additional functions filtered by this action
    return apply_filters( 'iasd_theme_validate_input_examples', $output, $input );
    }
} // end sandbox_theme_initialize_input_examples



?>