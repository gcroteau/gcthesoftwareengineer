<?php 

/* ---- Add Title Tag---- */

if ( ! function_exists ('gctse_setup') ) :

    function gctse_setup() {
        // let WordPress handle the Titles tags
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'gctse_setup');

/* ---- Add Stylesheets ---- */

function gctse_styles() {
    
    // Enqueue Main Stylesheet
    wp_enqueue_style('gctse_css', get_stylesheet_uri() );
    // Enqueue Google Fonts, Raleway
    //wp_enqueue_style('gctse_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700' );
}
add_action('wp_enqueue_scripts', 'gctse_styles');