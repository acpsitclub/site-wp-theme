<?php

if (!function_exists('itc_theme_setup')):
    function itc_theme_setup() {
        register_nav_menus(
            array(
                'primary' => __('Primary Menu')
            )
        );

    }

endif;

if ( ! isset ( $content_width) ) {
    $content_width = 1000;
}

add_action('after_setup_theme', 'itc_theme_setup');