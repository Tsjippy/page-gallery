<?php

namespace TSJIPPY\PAGEGALLERY;

use TSJIPPY;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\loadAssets');
/**
 * Registeres the CSS and JS
 */
function loadAssets()
{
    $deps   = SCRIPT_DEBUG ? [  
        '@tsjippy/form_submit_functions'
    ] :
    [];

    $deps[] = "@tsjippy/nonce_script";
    wp_register_script_module('@tsjippy/page_gallery_script', TSJIPPY\pathToUrl(PLUGINPATH . 'js/page_gallery' . TSJIPPY\JSEXTENSION), $deps, PLUGINVERSION);

    wp_register_style('tsjippy_page_gallery_style', TSJIPPY\pathToUrl(PLUGINPATH . 'css/page_gallery.min.css'), array(), PLUGINVERSION);
}
