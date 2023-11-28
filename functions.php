<?php
function test_product_scripts(){
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    
}
add_action('wp_enqueue_scripts','test_product_scripts');

?>
