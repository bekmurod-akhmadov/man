<?php
add_action('wp_enqueue_scripts','realmar_assets');

function realmar_assets(){
    wp_enqueue_style( 'styles' , get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('main4',get_template_directory_uri(). '/assets/js/main.js',array('jquery'),null,true);
}
add_theme_support('menus');