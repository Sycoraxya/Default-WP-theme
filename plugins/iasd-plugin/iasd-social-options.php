<?php
add_action('admin_init', 'iasd_initialize_social_options');
function iasd_initialize_social_options(){
    if( false == get_option('iasd_theme_social_options')){
        add_option('iasd_theme_social_options');
    }
    
    add_settings_section(
        'social_settings_section',
        'Adresgegevens',
        'iasd_social_options_callback',
        'iasd_theme_social_options'
    );
    add_settings_field(
        'bedrijfsnaam',
        'Bedrijfsnaam',
        'iasd_bedrijfsnaam_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'straat',
        'Straatnaam + Huisnummer',
        'iasd_straat_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'postcode',
        'Postcode + Stad',
        'iasd_postcode_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'telefoon',
        'Telefoonnummer',
        'iasd_telefoon_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'email',
        'E-mail adres',
        'iasd_email_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
/*    add_settings_field(
        'googlemaps',
        'Google Maps Iframe',
        'iasd_googlemaps_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );*/
    add_settings_field(
        'social_divider',
        'Social Media Settings',
        'iasd_divider_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'twitter',
        'Twitter',
        'iasd_twitter_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'facebook',
        'Facebook',
        'iasd_facebook_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'googleplus',
        'Google+',
        'iasd_googleplus_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'instagram',
        'Instagram',
        'iasd_instagram_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'pinterest',
        'Pinterest',
        'iasd_pinterest_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    add_settings_field(
        'linkedin',
        'LinkedIn',
        'iasd_linkedin_callback',
        'iasd_theme_social_options',
        'social_settings_section'
    );
    register_setting(
        'iasd_theme_social_options',
        'iasd_theme_social_options'/*,
        'iasd_theme_sanitize_social_options'*/
    );
}

function iasd_social_options_callback(){
    echo '<p>Voer uw adresgegevens in.</p>';
}
function iasd_bedrijfsnaam_callback(){
    $options = get_option( 'iasd_theme_social_options' );
    
    echo '<input type="text" id="bedrijfsnaam" name="iasd_theme_social_options[bedrijfsnaam]" value="'. $options['bedrijfsnaam'] .'" />';
    
}
function iasd_straat_callback(){
    $options = get_option( 'iasd_theme_social_options' );
    
    echo '<input type="text" id="straat" name="iasd_theme_social_options[straat]" value="'. $options['straat'] .'" />';
}
function iasd_postcode_callback(){
    $options = get_option( 'iasd_theme_social_options' );
    
    echo '<input type="text" id="postcode" name="iasd_theme_social_options[postcode]" value="'. $options['postcode'] .'" />';
}
function iasd_telefoon_callback(){
    $options = get_option( 'iasd_theme_social_options' );
    
    echo '<input type="text" id="telefoon" name="iasd_theme_social_options[telefoon]" value="'. $options['telefoon'] .'" />';
}
function iasd_email_callback(){
    $options = get_option( 'iasd_theme_social_options' );
    
    echo '<input type="text" id="email" name="iasd_theme_social_options[email]" value="'. $options['email'] .'" /><br><br>';
}
/*function iasd_googlemaps_callback(){
    $options = get_option( 'iasd_theme_social_options' );
    
    echo '<textarea id="googlemaps" name="iasd_theme_social_options[googlemaps]" rows="5" cols="50">'. $options['googlemaps'] .' </textarea><br><br>';
}*/

function iasd_divider_callback(){
    echo '<p>Voer de URL naar uw social media in.</p>';
}

function iasd_twitter_callback() {
    $options = get_option( 'iasd_theme_social_options' );
    $url = '';
    if( isset( $options['twitter'] ) ) {
        $url = $options['twitter'];
    }
    echo '<input type="text" id="twitter" name="iasd_theme_social_options[twitter]" value="' . $options['twitter'] . '" />';
}
function iasd_facebook_callback() {
    $options = get_option( 'iasd_theme_social_options' );
    $url = '';
    if( isset( $options['facebook'] ) ) {
        $url = $options['facebook'];
    }
    echo '<input type="text" id="facebook" name="iasd_theme_social_options[facebook]" value="' . $options['facebook'] . '" />';
}
function iasd_googleplus_callback() {
    $options = get_option( 'iasd_theme_social_options' );
    $url = '';
    if( isset( $options['googleplus'] ) ) {
        $url = $options['googleplus'];
    }
    echo '<input type="text" id="googleplus" name="iasd_theme_social_options[googleplus]" value="' . $options['googleplus'] . '" />';
}
function iasd_instagram_callback() {
    $options = get_option( 'iasd_theme_social_options' );
    $url = '';
    if( isset( $options['instagram'] ) ) {
        $url = $options['instagram'];
    }
    echo '<input type="text" id="instagram" name="iasd_theme_social_options[instagram]" value="' . $options['instagram'] . '" />';
}
function iasd_pinterest_callback() {
    $options = get_option( 'iasd_theme_social_options' );
    $url = '';
    if( isset( $options['pinterest'] ) ) {
        $url = $options['pinterest'];
    }
    echo '<input type="text" id="pinterest" name="iasd_theme_social_options[pinterest]" value="' . $options['pinterest'] . '" />';
}
function iasd_linkedin_callback() {
    $options = get_option( 'iasd_theme_social_options' );
    $url = '';
    if( isset( $options['linkedin'] ) ) {
        $url = $options['linkedin'];
    }
    echo '<input type="text" id="linkedin" name="iasd_theme_social_options[linkedin]" value="' . $options['linkedin'] . '" />';
}

function iasd_theme_sanitize_social_options( $input ) {
     
    // Define the array for the updated options
    $output = array();
 
    // Loop through each of the options sanitizing the data
    foreach( $input as $key => $val ) {
     
        if( isset ( $input[$key] ) ) {
            $output[$key] = esc_url_raw( strip_tags( stripslashes( $input[$key] ) ) );
        } // end if 
     
    } // end foreach
     
    // Return the new collection
    return apply_filters( 'iasd_theme_sanitize_social_options', $output, $input );
 
} // end iasd_theme_sanitize_social_options

$social_options = get_option ( 'iasd_theme_social_options' );
?>