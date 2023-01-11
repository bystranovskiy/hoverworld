<?php

/**
 * Definition of global variables
 */

defined('THEME_URI') || define('THEME_URI', get_template_directory_uri());
defined('THEME_DIR') || define('THEME_DIR', get_template_directory());


if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}


/**
 * Enqueue sections css and js
 */

function enqueue_sections_build($layouts)
{
    foreach ($layouts as $layout) {
        $css_file_path = '/build/section-' . $layout . '.min.css';
        $css_file_path_url = THEME_URI . $css_file_path;
        $css_file_path_dir = THEME_DIR . $css_file_path;
        if (file_exists($css_file_path_dir) && file_get_contents($css_file_path_dir)) {
            wp_enqueue_style('section-' . $layout, $css_file_path_url, array());
        }

        $js_file_path = '/build/section-' . $layout . '.min.js';
        $js_file_path_url = THEME_URI . $js_file_path;
        $js_file_path_dir = THEME_DIR . $js_file_path;
        if (file_exists($js_file_path_dir) && file_get_contents($js_file_path_dir)) {
            wp_enqueue_script('section-' . $layout, $js_file_path_url, array('jquery'));
        }
    }
}


function in_array_any($needles, $haystack): bool
{
    return (bool)array_intersect($needles, $haystack);
}


/**
 * Init ACF theme option page
 */

function init_acf_option()
{
    if (function_exists('acf_add_options_page')) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title' => __('Theme Settings', 'hoverworld'),
            'menu_title' => __('Theme Settings', 'hoverworld'),
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
        ));

    }
}

add_action('acf/init', 'init_acf_option');


function hoverworld_setup()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'main-menu' => esc_html__('Main menu', 'hoverworld'),
            'footer-menu' => esc_html__('Footer menu', 'hoverworld'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );

    add_image_size('xl', 1512, 9999);
    add_image_size('xxl', 2560, 9999);

}

add_action('after_setup_theme', 'hoverworld_setup');


/**
 * Enqueue theme global css and js
 */

function hoverworld_scripts()
{
    wp_enqueue_style('main-styles', THEME_URI . '/build/main.min.css', array(), _S_VERSION);
    wp_enqueue_script('main-scripts', THEME_URI . '/build/main.min.js', array('jquery'), _S_VERSION);

    if (is_page_template('page-template-thank-you.php')) {
        wp_enqueue_style('thank-you-page', THEME_URI . '/build/thank-you-page.min.css', array(), _S_VERSION);
    }


    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    remove_action('wp_head', 'wp_print_styles', 99);
    remove_action('wp_head', 'wp_enqueue_style', 99);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_head', 'wp_print_styles', 30);
    add_action('wp_head', 'wp_enqueue_style', 30);
}

add_action('wp_enqueue_scripts', 'hoverworld_scripts');


add_action('admin_head', 'custom_styles');
function custom_styles()
{
    echo '
<style>
    .acf-admin-single-field-group .acf-field-object-flexible-content .acf-is-subfields .acf-field-object .acf-label, 
    .acf-admin-single-field-group .acf-field-object-flexible-content .acf-is-subfields .acf-field-object .acf-input, 
    .post-type-acf-field-group .metabox-holder.columns-1 #acf-field-group-fields, 
    .post-type-acf-field-group .metabox-holder.columns-1 #acf-field-group-options, 
    .post-type-acf-field-group .metabox-holder.columns-1 .meta-box-sortables.ui-sortable, 
    .post-type-acf-field-group .metabox-holder.columns-1 .notice, 
    .post-type-acf-field-group.columns-1 .notice {
        max-width: 100%;
    }
    .post-type-acf-field-group .acf-field-setting-name .acf-tip {
        left: auto;
        right: 0;
    }
</style>
';
}