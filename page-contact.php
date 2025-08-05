<?php get_header(); ?>
    <main class="main-contact">
        <div class="inner">
            <h2 class="form-title title-contact">お問い合わせ</h2>
            <div class="line-contact-wrap">
                <div class="line-contact"></div><!-- /.line-contact -->
            </div><!-- /.line-contact-wrap -->
            <form action="" method="post" name="contact" class="w800 dark-blue">
                <div class="form-area">
                    <label for="name" class="optional">氏名</label>
                    <input type="text" class="textbox">
                    <label for="tel" class="optional">電話</label>
                    <input type="tel" class="textbox">
                    <label for="email" class="required center">メールアドレス</label>
                    <input type="email" class="textbox" required>
                    <label for="" class="required preferred">ご希望の連絡方法</label>
                    <div class="radiobox">
                        <div class="radio1">
                            <input type="radio" name="" id="" class="radiobutton">
                            <label for="email" class="radio-label">メール</label>
                        </div><!-- /.radio1 -->
                        <div class="radio2">
                            <input type="radio" name="" id="" class="radiobutton">
                            <label for="tel" class="radio-label">電話</label>
                        </div><!-- /.radio2 -->
                    </div><!-- /.radiobox -->
                </div><!-- /.form-area -->
                <div class="textarea center">
                    <p class="form-caution">※電話連絡をご希望の際はご都合の良い時間帯も併せてご連絡ください。</p><!-- /.form-caution -->
                    <h3 class="s20">内容</h3>
                    <textarea name="" id="" rows="9" cols="36"></textarea>
                </div><!-- /.textarea -->
                <div class="submit-button">
                    <button type="submit" class="c-button c-button__submit">送信する</button>
                    <p class="caution">「プライバシーポリシー」の内容に同意して送信する。</p><!-- /.caution -->
                </div><!-- /.submit-button -->
            </form><!-- /.form -->
        </div><!-- /.inner -->
    </main><!-- /.main-contact -->
<?php get_footer();
