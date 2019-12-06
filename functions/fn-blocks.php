<?php

// remove the default wp-blocks and add our own custom ones
// function my_plugin_block_categories($categories, $post)
// {
//     return array(
//         array(
//             'slug' => 'empaxis',
//             'title' => __('Empaxis Blocks', 'empaxis'),
//             // 'icon'  => 'edit',
//         ),
//     );
// }
// add_filter('block_categories', 'my_plugin_block_categories', 10, 2);



// This way you only allow certain blocks through... 
// use this method to edit down the default block
// https://rudrastyh.com/gutenberg/remove-default-blocks.html

// add_filter('allowed_block_types', 'integral_allowed_block_types');
// function integral_allowed_block_types($allowed_blocks)
// {
//     return array(
//         'acf/hero',
//         'acf/find-out-more',
//         'acf/order-online',
//     );
// }





add_action('acf/init', 'my_register_blocks');

function my_register_blocks()
{
    // check function exists
    if (function_exists('acf_register_block')) {

        //  Find icons here
        // https://developer.wordpress.org/resource/dashicons/#editor-paste-word

        acf_register_block(array(
            'name' => 'text-container',
            'title' => __('CustomTitle'),
            'render_template' => 'blocks/text-container.php',
            'category' => 'empaxis',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'empaxis-wysiwygblogblock',
            'title' => __('WYSIWYG Block - Empaxis'),
            'render_template' => 'blocks/empaxis-wysiwygblogblock.php',
            'category' => 'empaxis',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'hero banner title',
            'title' => __('Empaxis - Hero Banner Title'),
            'render_template' => 'blocks/hero-banner-title.php',
            'category' => 'empaxis',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));


    }
}
