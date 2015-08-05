<?php
// Add Shortcode
function iasd_contact_bedrijfsnaam_shortcode() {
   $social_options = get_option ( 'iasd_theme_social_options' );
    return $social_options['bedrijfsnaam'];
}
add_shortcode( 'bedrijfsnaam', 'iasd_contact_bedrijfsnaam_shortcode' );
function iasd_contact_straat_shortcode() {
   $social_options = get_option ( 'iasd_theme_social_options' );
    return $social_options['straat'];
}
add_shortcode( 'straat', 'iasd_contact_straat_shortcode' );
function iasd_contact_postcode_shortcode() {
   $social_options = get_option ( 'iasd_theme_social_options' );
    return $social_options['postcode'];
}
add_shortcode( 'postcode', 'iasd_contact_postcode_shortcode' );
function iasd_contact_telefoon_shortcode() {
   $social_options = get_option ( 'iasd_theme_social_options' );
    return $social_options['telefoon'];
}
add_shortcode( 'telefoon', 'iasd_contact_telefoon_shortcode' );
function iasd_contact_email_shortcode() {
   $social_options = get_option ( 'iasd_theme_social_options' );
    return '<a href="mailto:'. $social_options['email'] .'">'. $social_options['email'] .'</a>';
}
add_shortcode( 'email', 'iasd_contact_email_shortcode' );
function iasd_contact_googlemaps_shortcode() {
    $social_options = get_option ( 'iasd_theme_social_options' );
    /*return $social_options['googlemaps'];*/
    
    $html='<iframe width="100%"height="400"frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/search?key=AIzaSyB7lPe6fdJx6BRtbfUGNjS9elIMkHpPxDc&q=';
    $html.= $social_options['bedrijfsnaam'].'+'.$social_options['straat'].'+'.$social_options['postcode'];
    $html.='" allowfullscreen></iframe>'; 

    return $html;   
}
add_shortcode( 'googlemaps', 'iasd_contact_googlemaps_shortcode' );

function col_50( $atts , $content = null ) {
    $html = '<div class="col-50">';
    $html .= $content;
    $html .= '</div>';

    return $html;
}
add_shortcode( 'col-50', 'col_50' );

function col_33( $atts , $content = null ) {
    $html = '<div class="col-33">';
    $html .= $content;
    $html .= '</div>';

    return $html;
}
add_shortcode( 'col-33', 'col_33' );

function col_25( $atts , $content = null ) {
    $html = '<div class="col-25">';
    $html .= $content;
    $html .= '</div>';

    return $html;
}
add_shortcode( 'col-25', 'col_25' );


?>