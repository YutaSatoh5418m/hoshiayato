<?php get_header(); ?>
    <main class="main">
        <section class="header-slide-menu-section">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-image-src="./img/IMG-5.jpg">
                        <img src="<?php echo get_theme_file_uri("/img/IMG-5.jpg"); ?>" alt="" width="386" height="454" />
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide" data-image-src="./img/IMG-37.jpg">
                        <img src="<?php echo get_theme_file_uri("/img/IMG-37.jpg"); ?>" alt="" width="386" height="454" />
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide" data-image-src="./img/IMG-41.jpg">
                        <img src="<?php echo get_theme_file_uri("/img/IMG-41.jpg"); ?>" alt="" width="386" height="454" />
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
                <div class="swiper-pagination"></div><!-- /.swiper-pagination -->
            </div><!-- /.swiper -->
            <nav class="button-menu">
                <a href="<?php echo get_page_link(7); ?>" class="c-button c-button-menu">主要政策</a>
                <a href="<?php echo get_page_link(12); ?>" class="c-button c-button-menu">活動報告</a>
                <a href="<?php echo get_page_link(14); ?>" class="c-button c-button-menu">プロフィール</a>
            </nav><!-- /.button-menu -->
        </section>
        <section class="top-message-sp w800 dark-blue">
            <div class="inner">
                <hgroup class="center">
                    <h2 class="s40 text-stroke">デジタル民主主義</h2>
                    <p class="s30 text-stroke white">-新しい政治の在り方-</p>
                </hgroup>
                <div class="top-message-container-sp">
                    <div class="top-message-content-sp center">
                        <p class="top-message-text-sp">日本の未来を守るため、時代に即した政治改革を進め、みなさんと新しい時代を切り拓きます。</p><!-- /.top-message-text -->
                        <a href="<?php echo get_page_link(7); ?>" class="c-button c-button--to-policy">主要政策を読む</a>
                    </div><!-- /.top-message-content-sp -->
                    <div class="top-message-content-sp">
                        <p class="top-message-text-sp2">国政政党の都合に振り回されず、鎌倉ファーストの市政を実現します！</p><!-- /.top-message-text2 -->
                        <a href="<?php echo get_permalink(get_page_by_path('thought')); ?>" class="c-button c-button--red">市政へ想いを読む</a>
                    </div><!-- /.top-message-content -->
                </div><!-- /.top-message-container-sp -->
            </div><!-- /.inner -->
        </section>
        <section class="top-message-pc w800 dark-blue">
            <div class="inner">
                <div class="top-message-container-pc">
                    <h2 class="s40 center">新しい政治の在り方</h2>
                    <div class="top-message-text-pc">
                        <p class="s25">日本は今、人口減少や少子高齢化、気候変動など、多くの課題に取り組んでいます。</p>
                        <br />
                        <p class="s25">未来に責任を持つ一人として、私は強い危機感を抱いています。このままでは、私の大切な街や生活が持続できなくなるかも知れません。</p>
                        <br />
                        <p class="s25">古都、鎌倉の歴史と文化を守りながら、時代に合わない仕組みを改め、誰もが自分らしく生き、働ける環境を整えていきます。</p>
                        <br />
                        <p class="s25">地域とともに歩み、誰もが安心して暮らせる新しい鎌倉をつくりたい。</p>
                        <br />
                        <p class="s25">星あやとは、皆さんとともに、この変化の時代を乗り越え、希望に満ちた未来への扉を力強く開いていきます。</p>
                    </div><!-- /.top-message-text-pc -->
                    <br />
                    <div class="center">
                        <a href="<?php echo get_page_link(7); ?>" class="c-button c-button--to-policy">主要政策を読む</a>
                    </div><!-- /.button-to-policy -->
                </div>
            </div><!-- /.top-message-inner -->
        </section><!-- /.top-message-pc -->
    </main>
<?php get_footer();
