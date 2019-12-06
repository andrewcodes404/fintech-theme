<?php

//turn this back to true in prod
show_admin_bar(false);

//for page titles
add_theme_support('title-tag');

//turn on featured image
add_theme_support('post-thumbnails');

// edit the exceprt 'read more'
function wpdocs_excerpt_more($more)
{
    return '<span class="read-more"> ...read more</span>';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

add_filter('excerpt_length', function ($length) {
    return 30;
});


function  ac404_hubspot_chatbox()
{
    wp_enqueue_script('hubspot_chatbox',  '//js.hs-scripts.com/4509615.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'ac404_hubspot_chatbox');


function ac404_webflow_dependencies()
{

    // WEBFLOW STYLE SHEETS --- WEBFLOW STYLE SHEETS --- WEBFLOW STYLE SHEETS --- 
    // wp_enqueue_style('normalize-style', get_stylesheet_directory_uri() . '/style/cssWebFlow/normalize.css');
    wp_enqueue_style('webflow-style', get_stylesheet_directory_uri() . '/style/cssWebFlow/webflow.css'); //
    wp_enqueue_style('webflow-style-anim', get_stylesheet_directory_uri() . '/style/cssWebFlow/empaxis-animations.webflow.css');

    // WEBFLOW JS --- WEBFLOW JS --- WEBFLOW JS --- WEBFLOW JS --- WEBFLOW JS --- 
    wp_enqueue_script('webflow-script', get_stylesheet_directory_uri() . '/js/webflow.js', array('jquery'), '3.4.1', true); //load with wp_footer
    wp_enqueue_script('webfont-script', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(), null, false);

    // wp_enqueue_style('metric-theme-gfonts', '//fonts.googleapis.com/css?family=Roboto:300,regular,500%7CRoboto+Condensed:300,regular,700%7CRoboto+Slab:300,regular,700%7CArbutus+Slab:regular');
}

add_action('wp_enqueue_scripts', 'ac404_webflow_dependencies');


function ac404_load_webflow_fn()
{ ?>

    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
<?php
}

add_action('wp_head', 'ac404_load_webflow_fn');


function ac404_webfont_jquery()
{ ?>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>
    <?php
    }

    add_action('wp_head', 'ac404_webfont_jquery');


    function ac404_load_webfont()
    {
        if (wp_script_is('metric-webfont-script', 'done')) {
            ?>
        <script>
            WebFont.load({
                google: {
                    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
                }
            });
        </script>
    <?php }
    }

    // add_action('wp_head', 'ac404_load_webfont');




    // Coverage
    // Capability
    // Culture

    // Oaas middle-and-back-office-outsourcing
    // Tamp1 tamp1-platform-investment-managers
    // RPA robotic-process-automation


    function ac404_add_data_wf_page()
    {

        if (is_page('capability')) {
            ?>
        <html data-wf-page="5dc2e297de1955cc479f4e1a">
    <?php
        } elseif (is_page('our-clients')) {
            ?>
        <html data-wf-page="5db1c8980cf70d41fd4ba562">
    <?php
        } elseif (is_page('coverage')) {
            ?>
        <html data-wf-page="5dc546da5e4ebc22c5ff4673">
    <?php
        } elseif (is_page('culture')) {
            ?>
        <html data-wf-page="5dc2e297de1955cc479f4e1a">
    <?php
        } elseif (is_page('middle-and-back-office-outsourcing')) {
            ?>
        <html data-wf-page="5dc2b28f1abfd3c9b47cf2b0">
    <?php
        } elseif (is_page('robotic-process-automation')) {
            ?>
        <html data-wf-page="5dc56bd85e4ebcb2c40076b3">
    <?php
        } elseif (is_page('tamp1-platform-investment-managers')) {
            ?>
        <html data-wf-page="5dc3f64c78cf53f2e8840305">
<?php
    }
}

add_action('wp_head', 'ac404_add_data_wf_page');

// CSS
require_once(get_template_directory() . '/functions/fn-css.php');

// JS
require_once(get_template_directory() . '/functions/fn-js.php');

// MENUS
require_once(get_template_directory() . '/functions/fn-menus.php');

//GUTENBERG BLOCKS
require_once(get_template_directory() . '/functions/fn-blocks.php');
