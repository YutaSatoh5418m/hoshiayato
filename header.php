<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('inter-uniquifier'); ?>>
    <header class="header-sp dark-blue w800">
        <div class="header-inner">
            <h1 class="s40">星あやと</h1>
            <div class="menu-box">
                <a href="" class="line">
                    <img src="<?php echo get_theme_file_uri("/img/line-icon.png"); ?>" alt="" width="158" height="170">
                </a><!-- /.line -->
                <button class="hamburger" id="js-buttonHamburger" type="button" aria-expanded="false">
                    <span class="hamburger-line">
                        <span class="visuallyHidden">メニューを開閉する</span>
                    </span>
                </button><!-- /.hamburger -->
            </div><!-- /.menu-box -->
        </div><!-- /.header-inner -->
    </header><!-- /.header-sp -->
    <div class="modal-container" id="modal-1" aria-hidden="true">
        <div tabindex="-1" data-micromodal-close>
            <div role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <div id="modal-1-content">
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
                            <a class="menu-link open-line" href="line://">
                                <img src="<?php echo get_theme_file_uri("/img/line-icon.png"); ?>" alt="" width="158" height="170">
                                <span class="dark-blue s20">LINEで問い合わせる</span>
                            </a><!-- /.menu-link -->
                        </li><!-- /.menu-item -->
                    </ul><!-- /.menu-list -->
                </div><!-- /.modal-1-content -->
            </div><!-- /.modal-1 -->
        </div><!-- /.modal-container -->
    </div><!-- /.modal-container -->
