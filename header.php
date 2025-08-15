<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('inter-uniquifier'); ?>>
    <a href="#main-content" class="skip-link">メインコンテンツにスキップ</a>
    <header class="header-sp dark-blue w800" role="banner">
        <div class="header-inner">
            <h1 class="s40">
                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="星あやと公式サイトのトップページへ">
                    星あやと
                </a>
            </h1>
            <div class="menu-box">
                <a href="" class="line" aria-label="LINEでお問い合わせ">
                    <img src="<?php echo get_theme_file_uri("/img/line-icon.png"); ?>" alt="LINEアイコン" width="158" height="170">
                </a><!-- /.line -->
                <button class="hamburger" id="js-buttonHamburger" type="button" aria-expanded="false" aria-controls="modal-1" aria-label="メニューを開く">
                    <span class="hamburger-line">
                        <span class="visuallyHidden">メニューを開閉する</span>
                    </span>
                </button><!-- /.hamburger -->
            </div><!-- /.menu-box -->
        </div><!-- /.header-inner -->
    </header><!-- /.header-sp -->
    <div class="modal-container" id="modal-1" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <div tabindex="-1" data-micromodal-close>
            <div role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <div id="modal-1-content">
                    <h2 id="modal-1-title" class="visuallyHidden">メインメニュー</h2>
                    <nav role="navigation" aria-label="メインメニュー">
                        <ul class="menu-list w800">
                            <li class="menu-item">
                                <a class="menu-link s40 dark-blue" href="<?php echo get_page_link(19); ?>">主要政策</a><!-- /.menu-link -->
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a class="menu-link s40 thought" href="<?php echo get_permalink(get_page_by_path('thought')); ?>">鎌倉市政への想い</a><!-- /.menu-link -->
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a class="menu-link s40 dark-blue" href="<?php echo get_page_link(12); ?>">活動報告</a><!-- /.menu-link -->
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a class="menu-link s40 dark-blue" href="<?php echo get_page_link(14); ?>">プロフィール</a><!-- /.menu-link -->
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a class="menu-link s40 dark-blue" href="<?php echo get_page_link(21); ?>">お問い合わせ</a><!-- /.menu-link -->
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a class="menu-link open-line" href="line://" aria-label="LINEアプリでお問い合わせ">
                                    <img src="<?php echo get_theme_file_uri("/img/line-icon.png"); ?>" alt="LINEアイコン" width="158" height="170">
                                    <span class="dark-blue s20">LINEで問い合わせる</span>
                                </a><!-- /.menu-link -->
                            </li><!-- /.menu-item -->
                        </ul><!-- /.menu-list -->
                    </nav>
                </div><!-- /.modal-1-content -->
            </div><!-- /.modal-1 -->
        </div><!-- /.modal-container -->
