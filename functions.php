<?php
ini_set('display_errors', true);

// Incluir este archivo permite la utilizacion de la funcion is_plugin_active() en el frontend.
include_once(ABSPATH .'wp-admin/includes/plugin.php');

//Paginas
define('RPT_THEME_DIR', get_template_directory_uri());
define('PAGINA_SOBRE_NOSOTROS', 'sobre-nosotros');
define('PAGINA_CONTACTO', 'contacto');


function rpt_register_scripts() {

    //style (Custom + Bootstrap 5):
    wp_register_style( 'screen', RPT_THEME_DIR . '/style.css', array() );
    wp_enqueue_style( 'screen' );

     // Google fonts
    wp_register_style( 'google_font1', '//fonts.googleapis.com/css?family=Montserrat:400,700', array() );
    wp_enqueue_style( 'google_font1' );
    wp_register_style( 'google_font2', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', array() );
    wp_enqueue_style( 'google_font2' );

//    wp_register_style( 'fontawesome', RPT_THEME_DIR . '/node_modules/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
//    wp_enqueue_style( 'fontawesome' );

    //JS
    //=============================================================================================================================================================
    wp_register_script('bootstrap_js', RPT_THEME_DIR . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array( ), '5.2.3', true);
    wp_enqueue_script('bootstrap_js');

    wp_register_script('jquery', RPT_THEME_DIR . '/node_modules/jquery/dist/jquery.min.js', array( ), '3.7.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('fontawesome_free', RPT_THEME_DIR . '/node_modules/@fortawesome/fontawesome-free/js/all.js', array( ), '6.4.0');
    wp_enqueue_script('fontawesome_free');

    wp_register_script('bootbox_js', RPT_THEME_DIR . '/node_modules/bootbox/dist/bootbox.all.min.js', array('bootstrap_js', 'jquery' ), '6.0.0', true);
    wp_enqueue_script('bootbox_js');

    // Masonry
    // https://github.com/desandro/masonry
//    wp_register_script('masonry_js', RPT_THEME_DIR . '/node_modules/masonry-layout/dist/masonry.pkgd.js', array(), '4.2.2', true);
//    wp_enqueue_script('masonry_js');

    wp_register_script('custom_js', RPT_THEME_DIR . '/js/scripts.js', array('bootstrap_js', 'jquery' ), '', true);
    wp_enqueue_script('custom_js');
}


// Hooks
add_action( 'wp_enqueue_scripts', 'rpt_register_scripts' );

function getLinkPagina($slug) {
    $pagina = get_page_by_path($slug);
    if ($pagina instanceof WP_Post && $pagina->post_status == 'publish') {
        return get_permalink($pagina);
    }
    return null;
}

?>
