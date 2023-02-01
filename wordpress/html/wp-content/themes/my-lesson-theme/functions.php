<?php
    function custom_theme_setup(){
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'responsive-embeds' );
        // ヘッダーナビゲーション用
        register_nav_menus(
            array(
                'header-navi' => 'ヘッダーナビゲーション'
            )
        );
    }
    add_action( 'after_setup_theme', 'custom_theme_setup' );
    function my_theme_scripts(){
        wp_enqueue_style(
            'base-style',
            get_stylesheet_uri(),
            array(),
            '1.0',
            'all'
        );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

    function custom_widget_register(){
        register_sidebar ( array(
            'name'  => 'サイドバーウィジェットエリア',
            'id'    => 'sidebar-widget',
            'description'   => '',
            'before_widget' => '<div id="%1s" class="c-widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="c-widget__title">',
            'after_title'   => '</h2>'
        ) );
    }
    add_action('widgets_init', 'custom_widget_register');

    // リロード毎にSCSSファイルを強制コンパイルさせる
    // define(‘WP_SCSS_ALWAYS_RECOMPILE’, true);
?>