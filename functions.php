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

// 画像の最適化
function hoshi_ayato_image_optimization($attr, $attachment, $size) {
    if (is_admin()) {
        return $attr;
    }

    // WebP対応の確認
    if (function_exists('imagewebp')) {
        $attr['data-webp'] = 'true';
    }

    // 画像のサイズ最適化
    if (isset($attr['width']) && isset($attr['height'])) {
        $attr['width'] = min($attr['width'], 1200);
        $attr['height'] = min($attr['height'], 1200);
    }

    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'hoshi_ayato_image_optimization', 20, 3);

// キャッシュヘッダーの設定
function hoshi_ayato_cache_headers() {
    // 一時的に無効化
    /*
    if (!is_admin()) {
        // 静的ファイルのキャッシュ設定
        if (is_page() || is_single()) {
            header('Cache-Control: public, max-age=3600'); // 1時間
        } else {
            header('Cache-Control: public, max-age=86400'); // 24時間
        }
    }
    */
}
add_action('send_headers', 'hoshi_ayato_cache_headers');

// CSS・JSファイルの最適化
function hoshi_ayato_optimize_assets() {
    // HTMLの圧縮（開発環境では無効）
    // 一時的に無効化
    /*
    if (!defined('WP_DEBUG') || !WP_DEBUG) {
        ob_start('hoshi_ayato_minify_html');
    }
    */
}
add_action('init', 'hoshi_ayato_optimize_assets');

// HTMLの圧縮
function hoshi_ayato_minify_html($html) {
    $search = array(
        '/\n/',     // 改行
        '/\r/',     // キャリッジリターン
        '/\t/',     // タブ
        '/\s{2,}/', // 複数のスペース
        '/>\s+</',  // タグ間の空白
    );

    $replace = array(
        '',
        '',
        '',
        ' ',
        '><',
    );

    return preg_replace($search, $replace, $html);
}

// 不要なWordPress機能の無効化
function hoshi_ayato_disable_unnecessary_features() {
    // emojiの無効化
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // embedの無効化
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // RSDリンクの無効化
    remove_action('wp_head', 'rsd_link');

    // wlwmanifestの無効化
    remove_action('wp_head', 'wlwmanifest_link');

    // shortlinkの無効化
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'hoshi_ayato_disable_unnecessary_features');

// データベースの最適化
function hoshi_ayato_optimize_database() {
    // 一時的に無効化
    /*
    global $wpdb;

    // リビジョンの自動削除（30日以上古いもの）
    $wpdb->query("DELETE FROM $wpdb->posts WHERE post_type = 'revision' AND post_date < DATE_SUB(NOW(), INTERVAL 30 DAY)");

    // スパムコメントの自動削除（30日以上古いもの）
    $wpdb->query("DELETE FROM $wpdb->comments WHERE comment_approved = 'spam' AND comment_date < DATE_SUB(NOW(), INTERVAL 30 DAY)");

    // ゴミ箱の自動空にする（30日以上古いもの）
    $wpdb->query("DELETE FROM $wpdb->posts WHERE post_status = 'trash' AND post_date < DATE_SUB(NOW(), INTERVAL 30 DAY)");
    */
}
add_action('wp_scheduled_delete', 'hoshi_ayato_optimize_database');

// セキュリティヘッダーの追加
function hoshi_ayato_security_headers() {
    // 一時的に無効化
    /*
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
    */
}
add_action('send_headers', 'hoshi_ayato_security_headers');

// WordPressのバージョン情報を隠す
remove_action('wp_head', 'wp_generator');

// XML-RPCを無効化
add_filter('xmlrpc_enabled', '__return_false');

// ファイル編集を無効化
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}

// ログイン試行回数の制限
function hoshi_ayato_limit_login_attempts($user, $username, $password) {
    if (!empty($username)) {
        $attempted_login = get_transient('attempted_login');
        if ($attempted_login === false) {
            $attempted_login = array();
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        $attempted_login[$ip] = isset($attempted_login[$ip]) ? $attempted_login[$ip] : 0;

        if ($attempted_login[$ip] >= 5) {
            return new WP_Error('too_many_attempts', 'ログイン試行回数が上限に達しました。しばらく時間をおいて再度お試しください。');
        }

        $attempted_login[$ip]++;
        set_transient('attempted_login', $attempted_login, 300); // 5分間有効
    }
    return $user;
}
add_filter('authenticate', 'hoshi_ayato_limit_login_attempts', 30, 3);

// ログイン成功時にカウントをリセット
function hoshi_ayato_reset_login_attempts($user_login, $user) {
    $attempted_login = get_transient('attempted_login');
    if ($attempted_login !== false) {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($attempted_login[$ip])) {
            unset($attempted_login[$ip]);
            set_transient('attempted_login', $attempted_login, 300);
        }
    }
}
add_action('wp_login', 'hoshi_ayato_reset_login_attempts', 10, 2);

// 管理画面のセキュリティ強化
function hoshi_ayato_admin_security() {
    // 管理者以外のユーザーが管理画面にアクセスできないようにする
    if (!current_user_can('administrator') && is_admin()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('init', 'hoshi_ayato_admin_security');

// コメントのスパム対策
function hoshi_ayato_comment_spam_check($commentdata) {
    // コメントが短すぎる場合
    if (strlen($commentdata['comment_content']) < 10) {
        wp_die('コメントが短すぎます。10文字以上で入力してください。');
    }

    // リンクが多すぎる場合
    $link_count = substr_count($commentdata['comment_content'], 'http');
    if ($link_count > 2) {
        wp_die('リンクが多すぎます。');
    }

    return $commentdata;
}
add_filter('preprocess_comment', 'hoshi_ayato_comment_spam_check');
