<?php

function diveto_enqueue_assets() {
    // CSS
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Philosopher', false);
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', false);
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // JS
    wp_enqueue_script('common-js', get_template_directory_uri() . '/js/common.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'diveto_enqueue_assets');

function diveto_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main-menu' => 'メインメニュー',
    ]);
}
add_action('after_setup_theme', 'diveto_setup');

function diveto_enqueue_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Philosopher', false);
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', false);
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('common-js', get_template_directory_uri() . '/js/common.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'diveto_enqueue_scripts');

// カスタム投稿タイプ（実績）
function create_custom_post_types() {
    register_post_type('jisseki', [
        'label' => '改善実績',
        'public' => true,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
    ]);

    register_post_type('shohin', [
        'label' => 'AI製品',
        'public' => true,
        'menu_position' => 6,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
    ]);
}
add_action('init', 'create_custom_post_types');

/*以下、画像の全幅表示対応 */
add_theme_support( 'align-wide' );

/*フッターメニューの追加*/
function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'フッターメニュー' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
