<?php
/**
 * Hoshi Ayato Theme functions and definitions
 */
// 直接アクセスを禁止
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// テーマのセットアップ
function hoshi_ayato_setup() {
    // タイトルタグのサポート
    add_theme_support('title-tag');

    // html5のサポート
    add_theme_support(
        'html5',
        array(
            'search-form',  // 検索フォーム
            'comment-form', // コメントフォーム
            'comment-list', // コメントリスト
            'gallery',      // ギャラリー
            'caption',      // キャプション
            'style',        // スタイル
            'script',       // スクリプト
            'navigation-widgets', // ナビゲーションウィジェット
            )
    );

    // メニューの登録
    register_nav_menus(array(
        'primary' => __('プライマリーメニュー', 'hoshi-ayato'),
        'footer' => __('フッターメニュー', 'hoshi-ayato'),
    ));
}
add_action('after_setup_theme', 'hoshi_ayato_setup');

// スタイルとスクリプトの読み込み
function hoshi_ayato_scripts() {
    // スタイルシート
    $version = filemtime(get_theme_file_path('css/style.css'));
    $js_version = filemtime(get_theme_file_path('/js/main.js')); // 最終更新時刻を取得
    // リセットCSS
    wp_enqueue_style('destyle', 'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css');
    // スライダー
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    // フォント
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&display=swap');
    // テーマのスタイルシート
    wp_enqueue_style('hoshi-ayato-style', get_stylesheet_directory_uri() . '/css/style.css', array(), $version);

    // JavaScript
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
    // モーダル
    wp_enqueue_script('micromodal', 'https://cdnjs.cloudflare.com/ajax/libs/micromodal/0.4.10/micromodal.min.js', array(), '0.4.10', true);
    // テーマのスクリプト
    wp_enqueue_script('hoshi-ayato-main', get_template_directory_uri() . '/js/main.js', array('jquery'), $js_version, true);
}
add_action('wp_enqueue_scripts', 'hoshi_ayato_scripts');
