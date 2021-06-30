<?php
function register_nav(){
    register_nav_menus(
        array(
            'header' => 'Header'
        )
        );
    register_nav_menus(
        array(
            'footer' => 'Footer'
        )
        );
     register_nav_menus(
        array(
            '404' => '404'
        )
        );

}
if(!function_exists('setup')):
    function setup(){
        register_nav();
        add_theme_support('post-thumbnails');
        add_image_size('team',475,475,array('center','center'));
    }
endif;

function mytheme_register_nav_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'your-text-domain' ),
        'footer' => __( 'Footer Menu', 'your-text-domain' )
    )); 
}

function scripts_header(){
    wp_enqueue_script('init',get_stylesheet_uri());
}
// function scripts_footer(){

// }

add_action('after_setup_theme','setup');
add_action('wp_enquue_scripts','script_header');
add_action( 'after_setup_theme', 'mytheme_register_nav_menus' );

?>