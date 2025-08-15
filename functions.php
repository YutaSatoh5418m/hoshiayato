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

    // カスタムロゴのサポート
    add_theme_support('custom-logo');

    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');

    // 自動フィードリンク
    add_theme_support('automatic-feed-links');
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

// SEO関連のメタタグ追加
function hoshi_ayato_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="description" content="星あやと公式サイト。鎌倉市議会議員として、デジタル民主主義の実現と新しい政治の在り方を目指します。主要政策、活動報告、プロフィールをご覧ください。" />' . "\n";
        echo '<meta name="keywords" content="星あやと,鎌倉市,市議会議員,政治,デジタル民主主義,政策" />' . "\n";
        echo '<meta property="og:title" content="星あやと公式サイト - デジタル民主主義の実現" />' . "\n";
        echo '<meta property="og:description" content="鎌倉市議会議員として、デジタル民主主義の実現と新しい政治の在り方を目指します。" />' . "\n";
        echo '<meta property="og:type" content="website" />' . "\n";
        echo '<meta property="og:url" content="' . esc_url(home_url('/')) . '" />' . "\n";
        echo '<meta property="og:site_name" content="星あやと公式サイト" />' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    }
}
add_action('wp_head', 'hoshi_ayato_meta_tags');

// 構造化データの追加
function hoshi_ayato_schema_markup() {
    if (is_front_page()) {
        echo '<script type="application/ld+json">' . "\n";
        echo '{' . "\n";
        echo '  "@context": "https://schema.org",' . "\n";
        echo '  "@type": "Person",' . "\n";
        echo '  "name": "星あやと",' . "\n";
        echo '  "jobTitle": "鎌倉市議会議員",' . "\n";
        echo '  "worksFor": {' . "\n";
        echo '    "@type": "Organization",' . "\n";
        echo '    "name": "鎌倉市議会"' . "\n";
        echo '  },' . "\n";
        echo '  "url": "' . esc_url(home_url('/')) . '",' . "\n";
        echo '  "description": "デジタル民主主義の実現と新しい政治の在り方を目指す鎌倉市議会議員"' . "\n";
        echo '}' . "\n";
        echo '</script>' . "\n";
    }
}
add_action('wp_head', 'hoshi_ayato_schema_markup');

// 画像の遅延読み込み対応
function hoshi_ayato_lazy_loading($attr, $attachment, $size) {
    if (is_admin()) {
        return $attr;
    }

    $attr['loading'] = 'lazy';
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'hoshi_ayato_lazy_loading', 10, 3);

// WordPressのバージョン情報を隠す
remove_action('wp_head', 'wp_generator');

// XML-RPCを無効化
add_filter('xmlrpc_enabled', '__return_false');

// ファイル編集を無効化
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}
