<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        $parent_style = 'twentynineteen-style-enfant';
        wp_enqueue_style ( $parent_style, get_template_directory_uri() .'/style.css' );
        wp_enqueue_style(
            'twentynineteen-style-enfant',
            get_stylesheet_directory_uri() .'/style.css',
            array(),
            filemtime( get_stylesheet_directory() .'/style.css')
        );
        // Charge le fichier animation.js
        wp_enqueue_script(
            'animation',
            get_stylesheet_directory_uri() . '/js/animation.js',
            array(),
            filemtime( get_stylesheet_directory() . '/js/animation.js' )
        );
    }
?>
