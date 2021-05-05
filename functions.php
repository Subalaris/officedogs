<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function my_custom_scripts()
{
    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');


add_action('init', 'use_jquery_from_google');

function use_jquery_from_google()
{
    if (is_admin()) {
        return;
    }

    global $wp_scripts;
    if (isset($wp_scripts->registered['jquery']->ver)) {
        $ver = $wp_scripts->registered['jquery']->ver;
        $ver = str_replace("-wp", "", $ver);
    } else {
        $ver = '1.12.4';
    }

    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", false, $ver);
}


function wpb_load_fa()
{

    wp_enqueue_script('wpb-fa', 'https://use.fontawesome.com/123456abc.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'wpb_load_fa');


add_action('wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa()
{
    wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
