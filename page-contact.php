<?php get_header(); ?>
    <main class="main-contact">
        <div class="inner">
            <h2 class="form-title title-contact">お問い合わせ</h2>
            <div class="line-contact-wrap">
                <div class="line-contact"></div><!-- /.line-contact -->
            </div><!-- /.line-contact-wrap -->

            <?php
            // フォーム送信処理
            if ($_POST['submit_contact']) {
                // nonce検証
                if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form')) {
                    $error_message = 'セキュリティエラーが発生しました。ページを再読み込みしてください。';
                } else {
                    // 入力値のサニタイズ
                    $name = sanitize_text_field($_POST['name']);
                    $tel = sanitize_text_field($_POST['tel']);
                    $email = sanitize_email($_POST['email']);
                    $contact_method = sanitize_text_field($_POST['contact_method']);
                    $message = sanitize_textarea_field($_POST['message']);

                    // バリデーション
                    $errors = array();
                    if (empty($name)) $errors[] = '氏名を入力してください。';
                    if (empty($email)) $errors[] = 'メールアドレスを入力してください。';
                    if (!is_email($email)) $errors[] = '正しいメールアドレスを入力してください。';
                    if (empty($contact_method)) $errors[] = 'ご希望の連絡方法を選択してください。';
                    if (empty($message)) $errors[] = 'お問い合わせ内容を入力してください。';

                    if (empty($errors)) {
                        // 管理者にメール送信
                        $to = get_option('admin_email');
                        $subject = '【星あやと公式サイト】お問い合わせ';
                        $body = "以下の内容でお問い合わせがありました。\n\n";
                        $body .= "氏名: " . $name . "\n";
                        $body .= "電話: " . $tel . "\n";
                        $body .= "メールアドレス: " . $email . "\n";
                        $body .= "連絡方法: " . $contact_method . "\n";
                        $body .= "お問い合わせ内容:\n" . $message . "\n";

                        $headers = array('Content-Type: text/plain; charset=UTF-8');

                        if (wp_mail($to, $subject, $body, $headers)) {
                            $success_message = 'お問い合わせを受け付けました。ありがとうございます。';
                            // フォームをクリア
                            $name = $tel = $email = $contact_method = $message = '';
                        } else {
                            $error_message = 'メールの送信に失敗しました。しばらく時間をおいて再度お試しください。';
                        }
                    } else {
                        $error_message = implode('<br>', $errors);
                    }
                }
            }
            ?>

            <?php if (isset($success_message)): ?>
                <div class="success-message" role="alert">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($error_message)): ?>
                <div class="error-message" role="alert">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="contact" class="w800 dark-blue">
                <?php wp_nonce_field('contact_form', 'contact_nonce'); ?>

                <div class="form-area">
                    <label for="name" class="required">氏名 <span class="required-mark">*</span></label>
                    <input type="text" id="name" name="name" class="textbox" value="<?php echo esc_attr($name ?? ''); ?>" required aria-required="true">

                    <label for="tel" class="optional">電話番号</label>
                    <input type="tel" id="tel" name="tel" class="textbox" value="<?php echo esc_attr($tel ?? ''); ?>" pattern="[0-9\-\(\)\s]+" placeholder="例: 090-1234-5678">

                    <label for="email" class="required">メールアドレス <span class="required-mark">*</span></label>
                    <input type="email" id="email" name="email" class="textbox" value="<?php echo esc_attr($email ?? ''); ?>" required aria-required="true">

                    <fieldset class="contact-method-fieldset">
                        <legend class="required">ご希望の連絡方法 <span class="required-mark">*</span></legend>
                        <div class="radiobox">
                            <div class="radio1">
                                <input type="radio" name="contact_method" id="contact_email" value="メール" class="radiobutton" <?php checked($contact_method ?? '', 'メール'); ?> required>
                                <label for="contact_email" class="radio-label">メール</label>
                            </div>
                            <div class="radio2">
                                <input type="radio" name="contact_method" id="contact_tel" value="電話" class="radiobutton" <?php checked($contact_method ?? '', '電話'); ?> required>
                                <label for="contact_tel" class="radio-label">電話</label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="textarea">
                    <p class="form-caution">※電話連絡をご希望の際はご都合の良い時間帯も併せてご連絡ください。</p>
                    <label for="message" class="required">お問い合わせ内容 <span class="required-mark">*</span></label>
                    <textarea name="message" id="message" rows="9" cols="36" required aria-required="true"><?php echo esc_textarea($message ?? ''); ?></textarea>
                </div>

                <div class="submit-button">
                    <button type="submit" name="submit_contact" class="c-button c-button__submit">送信する</button>
                    <p class="caution">
                        <a href="<?php echo get_page_link(get_page_by_path('privacy-policy')->ID); ?>" target="_blank">「プライバシーポリシー」</a>の内容に同意して送信する。
                    </p>
                </div>
            </form>
        </div>
    </main>
<?php get_footer(); ?>
