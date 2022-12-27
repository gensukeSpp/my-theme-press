<?php
    function custom_theme_setup(){
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'responsive-embeds' );
    }
    add_action( 'after_setup_theme', 'custom_theme_setup' );
    function my_theme_scripts(){
        wp_enqueue_style(
            'base-style',
            get_stylesheet_uri(),
            array(),
            '1.0',
            'all'
        )
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
    // ヘッダーナビゲーション用
    register_nav_menu('header-navi', 'ヘッダーナビゲーション');
?>