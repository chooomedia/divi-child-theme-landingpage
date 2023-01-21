<?php
function tooly_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'injection-script', get_stylesheet_directory_uri() . '/assets/js/divi-animated-pixi-background.js','', '1.0', true );
    wp_enqueue_script( 'pixi-animation', get_stylesheet_directory_uri() . '/assets/js/pixi.js','', '7.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'tooly_enqueue_styles' );