<?php 

function importcss(){

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'importcss');


//Navigation Menu
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
    'topbar' => __('Top Bar Menu'),
));

//customize excerpt word length
function custom_excerpt_length(){
    return 10;
}

add_filter('excerpt_length','custom_excerpt_length');