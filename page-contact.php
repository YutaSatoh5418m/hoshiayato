<?php get_header(); ?>
    <main class="main-contact">
        <div class="inner">
            <h2 class="form-title title-contact">お問い合わせ</h2>
            <div class="line-contact-wrap">
                <div class="line-contact"></div><!-- /.line-contact -->
            </div><!-- /.line-contact-wrap -->

            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="contact" class="w800 dark-blue">
                <?php wp_nonce_field('contact_form', 'contact_nonce'); ?>

                <div class="form-area">
                    <label for="name" class="required">氏名 <span class="required-mark">*</span></label>
                    <input type="text" id="name" name="name" class="textbox" required aria-required="true">

                    <label for="tel" class="optional">電話番号</label>
                    <input type="tel" id="tel" name="tel" class="textbox" pattern="[0-9\-\(\)\s]+" placeholder="例: 090-1234-5678">

                    <label for="email" class="required">メールアドレス <span class="required-mark">*</span></label>
                    <input type="email" id="email" name="email" class="textbox" required aria-required="true">

                    <fieldset class="contact-method-fieldset">
                        <legend class="required">ご希望の連絡方法 <span class="required-mark">*</span></legend>
                        <div class="radiobox">
                            <div class="radio1">
                                <input type="radio" name="contact_method" id="contact_email" value="メール" class="radiobutton" required>
                                <label for="contact_email" class="radio-label">メール</label>
                            </div>
                            <div class="radio2">
                                <input type="radio" name="contact_method" id="contact_tel" value="電話" class="radiobutton" required>
                                <label for="contact_tel" class="radio-label">電話</label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="textarea">
                    <p class="form-caution">※電話連絡をご希望の際はご都合の良い時間帯も併せてご連絡ください。</p>
                    <label for="message" class="required">お問い合わせ内容 <span class="required-mark">*</span></label>
                    <textarea name="message" id="message" rows="9" cols="36" required aria-required="true"></textarea>
                </div>

                <div class="submit-button">
                    <button type="submit" name="submit_contact" class="c-button c-button__submit">送信する</button>
                    <p class="caution">
                        <a href="<?php echo get_page_link(16); ?>" target="_blank">「プライバシーポリシー」</a>の内容に同意して送信する。
                    </p>
                </div>
            </form>
        </div>
    </main>
<?php get_footer(); ?>
