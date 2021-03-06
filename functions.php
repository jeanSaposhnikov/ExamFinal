<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
}
function add_google_fonts() {
    wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto' );
  }

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


function extraire_ateliers($query) {
        if($query->is_category('atelier'))
        {
            $query->set( 'category_name', 'atelier' );
            $query->set( 'posts_per_page', 10 );
            $query->set( 'orderby', 'post_name');
            $query->set( 'order', 'ASC');
        }
}

add_action('pre_get_posts', 'extraire_ateliers');