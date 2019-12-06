<?php

function ac404_custom_theme_js()
{
    wp_enqueue_script('app_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true);

}

///AND DON’T FORGET TO CALL IT
add_action('wp_enqueue_scripts', 'ac404_custom_theme_js');
