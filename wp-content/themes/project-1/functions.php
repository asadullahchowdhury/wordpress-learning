<?php
/*
 * My theme Function
 */


//Theme Title
add_theme_support('title-tag');


//Theme file and js files
function rahat_css_js_calling()
{
    wp_enqueue_style('wl-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 'v5.3.2', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

//jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), 'v5.3.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true');
}

add_action('wp_enqueue_scripts', 'rahat_css_js_calling');


// Theme function
function theme_customizer_register($wp_customize)
{
    $wp_customize->add_section('theme_header_area', array(
        'title' => __('Header Area', 'rahatchowdhury'),
        'description' => 'If you are interested to update your header area , You can do it here.'
    ));

    $wp_customize->add_setting('main_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'main_logo',
        'section' => 'theme_header_area',
        'description' => 'If you are interested to update your logo, You can do it here.'
    )));
}


add_action('customize_register', 'theme_customizer_register');
