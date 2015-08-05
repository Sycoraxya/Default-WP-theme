<?php
 
function load_my_quicktags() {
 
    // Load the `my-quicktags.js` file with the `QTags.addButton()` functions.
    wp_enqueue_script( 'iasd-quicktags', '/wp-content/plugins/iasd-plugin/quicktags.js', array( 'quicktags' ) );
 
}
 
add_action( 'admin_enqueue_scripts', 'load_my_quicktags' );
 
?>