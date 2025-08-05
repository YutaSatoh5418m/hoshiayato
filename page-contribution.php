<?php get_header(); ?>
    <main class="main">
        <section class="about-contribution w800 dark-blue">
            <hgroup>
                <p class="bg-dark-blue-sp">最大40%相当が所得税の控除対象</p>
                <p class="bg-dark-blue-sp">最大30%相当が住民税の控除対象</p>
                <p class="bg-dark-blue-sp">法人も寄付による税制優遇がある</p>
            </hgroup>
            <div class="contribution-text">
                <p class="s14">ご支援よろしくお願いいたします。<br />鎌倉の会の政治姿勢や政策、主張に共鳴して下さる方に資金面からのご支援をお願いしています。<br />鎌倉の会の政治活動に資金面からのご支援をいただける方がいらっしゃいましたら、資料をお送りいたしますので、以下のフォームよりご連絡下さい。</p>
                <br>
                <h6 class="s14">※ご注意</h6>
                <ul class="s14">
                    <li>個人献金は、政治資金規正法により以下の規制を受けることになります。</li>
                    <li>日本国籍を有する方のみが献金をすることができます。</li>
                    <li>年間150万円を超える政治献金を同一の政治団体にすることはできません。</li>
                    <li>合計して年間1000万円を超える政治献金をすることはできません。</li>
                    <li>年間五万円を超える献金については、収支報告書に献金者の氏名住所などを記載することになります。</li>
                </ul>
            </div><!-- /.contribution-text -->
        </section><!-- /.about-contribution -->
        <section class="form">
            <h2 class="form-title title-contribution">政治献金のお申し込み</h2>
            <form action="" method="post" name="contribution" class="w800 dark-blue">
                <div class="form-inner">
                    <div class="form-area">
                        <label for="name" class="optional">氏名</label>
                        <input type="text" class="textbox">
                        <label for="tel" class="optional">電話</label>
                        <input type="tel" class="textbox">
                        <label for="email" class="required">メールアドレス</label>
                        <input type="email" class="textbox" required>
                        <label for="" class="required">ご希望の連絡方法</label>
                        <div class="radiobox">
                            <div class="radio1">
                                <input type="radio" name="" id="" class="radiobutton">
                                <label for="email" class="radio-label">メール</label>
                            </div><!-- /.radio1 -->
                            <div class="radio2">
                                <input type="radio" name="" id="" class="radiobutton">
                                <label for="tel" class="radio-label">電話</label>
                            </div>
                        </div><!-- /.radiobox -->
                    </div><!-- /.form-area -->
                </div><!-- /.form-inner -->
                <div class="textarea center">
                    <p class="form-caution">※電話連絡をご希望の際はご都合の良い時間帯も併せてご連絡ください。</p><!-- /.form-caution -->
                    <h3 class="s20 center">内容</h3>
                    <textarea name="" id="" rows="9" cols="36"></textarea>
                </div><!-- /.textarea -->
                <div class="submit-button">
                    <button type="submit" class="c-button c-button__submit">送信する</button>
                    <p class="caution">「プライバシーポリシー」の内容に同意して送信する。</p><!-- /.caution -->
                </div><!-- /.submit-button -->
            </form>
        </section><!-- /.form -->
    </main><!-- /.main -->
<?php get_footer();
