<?php

function ac404_custom_theme_styles()
{
    //this is the compiled minimized sass
    wp_enqueue_style('style_custom_css', get_template_directory_uri() . '/style/css/style.min.css');
}

add_action('wp_enqueue_scripts', 'ac404_custom_theme_styles');
