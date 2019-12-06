<?php
add_theme_support('menus');
function register_theme_menus()
{
    register_nav_menus(
        array(
            'desktop_nav' => _('Desktop Nav'),
            'mobile_nav' => _('Mobile Nav'),
            'footer_nav' => _('Footer Nav'),
        )
    );
}
add_action('init', 'register_theme_menus');
