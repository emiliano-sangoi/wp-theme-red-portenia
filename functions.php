<?php
ini_set('display_errors', true);

// Incluir este archivo permite la utilizacion de la funcion is_plugin_active() en el frontend.
//include_once(ABSPATH .'wp-admin/includes/plugin.php');

//Paginas
define('RPT_THEME_DIR', get_template_directory_uri());
define('RPT_CAROUSEL_SOCIOS_ITEMS_POR_SLIDE', 7);
define('RPT_CAROUSEL_SOCIOS_VELOCIDAD', 3000); // 5 segundos
define('PAGINA_SOBRE_NOSOTROS', 'sobre-nosotros');
define('PAGINA_CONTACTO', 'contacto');
define('RPT_CATEGORIA_NOVEDADES', 'novedades');
define('RPT_CATEGORIA_SOCIOS', 'socios');
define('RPT_CATEGORIA_PREG_FREC', 'preguntas-frecuentes');
define('PAGINA_SUMATE', 'sumate');
define('RPT_CATEGORIA_OFICINAS', 'oficinas');
define('RPT_CATEGORIA_CONTACTO', 'contacto');


function rpt_register_scripts()
{

    //style (Custom + Bootstrap 5):
    wp_register_style('screen', RPT_THEME_DIR . '/style.css', array());
    wp_enqueue_style('screen');

    // Google fonts
    wp_register_style('google_font1', '//fonts.googleapis.com/css?family=Montserrat:400,700', array());
    wp_enqueue_style('google_font1');
    wp_register_style('google_font2', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', array());
    wp_enqueue_style('google_font2');

//    wp_register_style( 'fontawesome', RPT_THEME_DIR . '/node_modules/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
//    wp_enqueue_style( 'fontawesome' );

    //JS
    //=============================================================================================================================================================
    wp_register_script('jquery_v3', RPT_THEME_DIR . '/node_modules/jquery/dist/jquery.min.js', array(), '3.7.0', true);
    wp_enqueue_script('jquery_v3');

    wp_register_script('bootstrap_js', RPT_THEME_DIR . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery_v3'), '5.2.3', true);
    wp_enqueue_script('bootstrap_js');

    wp_register_script('fontawesome_free', RPT_THEME_DIR . '/node_modules/@fortawesome/fontawesome-free/js/all.js', array(), '6.4.0');
    wp_enqueue_script('fontawesome_free');

    wp_register_script('bootbox_js', RPT_THEME_DIR . '/node_modules/bootbox/dist/bootbox.all.min.js', array('bootstrap_js', 'jquery_v3'), '6.0.0', true);
    wp_enqueue_script('bootbox_js');


    // Masonry
    // https://github.com/desandro/masonry
    // https://getbootstrap.com/docs/5.0/examples/masonry/
    wp_register_script('masonry_js', RPT_THEME_DIR . '/node_modules/masonry-layout/dist/masonry.pkgd.js', array(), '4.2.2', true);
    wp_enqueue_script('masonry_js');

//    wp_register_script('isotype', RPT_THEME_DIR . '/node_modules/isotope-layout/dist/isotope.pkgd.min.js', array('masonry_js', 'jquery_v3'), '6.0.0', true);
//    wp_enqueue_script('isotype');

    wp_register_script('custom_js', RPT_THEME_DIR . '/js/scripts.js', array('bootstrap_js', 'jquery_v3'), '', true);
    wp_enqueue_script('custom_js');
}


// Hooks
add_action('wp_enqueue_scripts', 'rpt_register_scripts');

function getLinkPagina($slug)
{
    $pagina = get_page_by_path($slug);
    if ($pagina instanceof WP_Post && $pagina->post_status == 'publish') {
        return get_permalink($pagina);
    }
    return null;
}

function getPagina($slug)
{
    $pagina = get_page_by_path($slug);
    if ($pagina instanceof WP_Post && $pagina->post_status == 'publish') {
        return $pagina;
    }
    return null;
}

function rpt_theme_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_post_type_support('page', 'excerpt');
}

add_action('after_setup_theme', 'rpt_theme_features');

function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

require 'ajustes/menu-ajustes.php';

?>
