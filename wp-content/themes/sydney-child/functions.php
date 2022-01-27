<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'sydney-bootstrap' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


// END ENQUEUE PARENT ACTION
add_shortcode('bloginfo', function($atts) {

    $atts = shortcode_atts(array('filter'=>'', 'info'=>''), $atts, 'bloginfo');

    $infos = array(
        'name', 'description',
        'wpurl', 'url', 'pingback_url',
        'admin_email', 'charset', 'version', 'html_type', 'language',
        'atom_url', 'rdf_url','rss_url', 'rss2_url',
        'comments_atom_url', 'comments_rss2_url',
    );

    $filter = in_array(strtolower($atts['filter']), array('raw', 'display'), true)
        ? strtolower($atts['filter'])
        : 'display';

    return in_array($atts['info'], $infos, true) ? get_bloginfo($atts['info'], $filter) : '';
});