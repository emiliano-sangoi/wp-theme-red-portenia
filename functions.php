<?php

define('RPT_THEME_DIR', get_template_directory_uri());

function rpt_register_scripts() {

    //style (Custom + Bootstrap 5):
    wp_register_style( 'screen', RPT_THEME_DIR . '/style.css', '', array(), 'screen' );
    wp_enqueue_style( 'screen' );

     // Google fonts
    wp_register_style( 'google_font1', '//fonts.googleapis.com/css?family=Montserrat:400,700', '', array(), 'screen' );
    wp_enqueue_style( 'google_font1' );
    wp_register_style( 'google_font2', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', '', array(), 'screen' );
    wp_enqueue_style( 'google_font2' );

    //JS
    //=============================================================================================================================================================
    wp_register_script('bootstrap_js', RPT_THEME_DIR . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array( ), '5.2.3', true);
    wp_enqueue_script('bootstrap_js');

    wp_register_script('jquery', RPT_THEME_DIR . '/node_modules/jquery/dist/jquery.min.js', array( ), '3.7.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('fontawesome_free', RPT_THEME_DIR . '/node_modules/fontawesome-free/js/all.min.js', array( ), '1.0.4');
    wp_enqueue_script('fontawesome_free');

    wp_register_script('bootbox_js', RPT_THEME_DIR . '/node_modules/bootbox/dist/bootbox.all.min.js', array('bootstrap_js', 'jquery' ), '6.0.0', true);
    wp_enqueue_script('bootbox_js');

    wp_register_script('custom_js', RPT_THEME_DIR . '/js/scripts.js', array('bootstrap_js', 'jquery' ), '', true);
    wp_enqueue_script('custom_js');
}


// Hooks
add_action( 'wp_enqueue_scripts', 'rpt_register_scripts' );
