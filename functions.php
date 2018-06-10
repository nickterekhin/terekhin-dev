<?php
define("CHILD_THEME_PATH_URI",get_stylesheet_directory_uri());
define("CHILD_THEME_PATH",get_stylesheet_directory());
define("CHILD_THEME_MAIN_STYLE",get_stylesheet_uri());
define("CHILD_THEME_UPLOAD_URI",wp_upload_dir()['baseurl']);

// enqueue the child theme stylesheet

function wp_schools_enqueue_scripts() {
    wp_register_style('terekhin-font',CHILD_THEME_PATH_URI.'/assets/css/terekhin_font.css');
    wp_register_style( 'childstyle', CHILD_THEME_PATH_URI . '/style.css'  );
    wp_enqueue_style( 'terekhin-font' );
    wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);


//hide admin bar
add_filter('show_admin_bar', '__return_false');