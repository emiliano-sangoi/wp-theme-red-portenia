<?php

define('RPT_THEME_DIR', get_template_directory_uri());

function rptheme_register_scripts() {

//    $template_dir = get_template_directory_uri();
//      $template_dir = get_template_directory();
    // $template_dir = 'http://fich.unl.edu.ar/catedraunesco/wp-content/themes/wp-theme-catedra_unesco';

    //css:
    //=========================================================================================================================

    //bootstrap:
//    wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/css/_t_bootstrap.min.css', '', '4.0.0', 'all' );
//    wp_enqueue_style( 'bootstrap' );

//    wp_register_style( 'bootstrap', URL_THEME .'/node_modules/bootstrap/dist/css/bootstrap.min.css', '', '4.1.1', 'all' );
//    wp_enqueue_style( 'bootstrap' );

//    //style:
    wp_register_style( 'screen', URL_THEME . '/style.css', '', array(), 'screen' );
    wp_enqueue_style( 'screen' );
//
//    //font-awesome
//    wp_register_style( 'font_awesome', URL_THEME .'/node_modules/font-awesome/css/font-awesome.min.css', '', '4.7.0');
//    wp_enqueue_style( 'font_awesome' );
//
//    //jssocials:
//    wp_register_style( 'jssocials_css', URL_THEME .'/node_modules/jssocials/dist/jssocials.css', array('font_awesome'));
//    wp_enqueue_style( 'jssocials_css' );
//    wp_register_style( 'jssocials-css-theme-flat', URL_THEME .'/node_modules/jssocials/dist/jssocials-theme-flat.css', array('font_awesome', 'jssocials_css'));
//    wp_enqueue_style( 'jssocials-css-theme-flat' );
//
//
//    //js
//    wp_deregister_script('jquery');
//
//    wp_register_script('jquery_v3', URL_THEME . '/node_modules/jquery/dist/jquery.min.js', '', '3.3.1', true);
//    wp_enqueue_script('jquery_v3');
//
//    wp_register_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( 'jquery_v3' ), '1.12.3', true);
//    wp_enqueue_script('popper');
//
    wp_register_script('bootstrap', URL_THEME . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( ), '5.2.3', true);
    wp_enqueue_script('bootstrap');
//
//    // Plugin JavaScript
//
//    // JQuery Easing
//    wp_register_script('jquery-easing', URL_THEME . '/node_modules/jquery.easing/jquery.easing.min.js',
//        array( 'jquery_v3', 'popper' ), '1.4.1', true);
//    wp_enqueue_script('jquery-easing');
//
//    // Scroll Reveal
//    wp_register_script('scrollreveal', URL_THEME . '/node_modules/scrollreveal/dist/scrollreveal.min.js',
//        array( 'jquery_v3', 'popper' ), '3.4.0', true);
//    wp_enqueue_script('scrollreveal');
//
//    // Jquery Magnific Popup
//    wp_register_script('magnific-popup', URL_THEME . '/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
//        array( 'jquery_v3' ), '1.1.0', true);
//    wp_enqueue_script('magnific-popup');
//
//    //jssocials:
//    wp_register_script( 'jssocials_js', URL_THEME . '/node_modules/jssocials/dist/jssocials.min.js', array( 'popper' ), '1.5.0', true );
//    wp_enqueue_script( 'jssocials_js' );
//
//    wp_register_script( 'site', URL_THEME . '/js/site.js', array( 'jquery_v3', 'bootstrap' ), '0.0.1', true );
//    wp_enqueue_script( 'site' );

}


// Hooks
add_action( 'wp_enqueue_scripts', 'rptheme_register_scripts' );
