<?php get_header(); ?>
    <main class="main">
        <section class="about-volunteer w800">
            <hgroup>
                <p class="bg-dark-blue-sp">政治や選挙が身近になります！</p>
                <p class="bg-dark-blue-sp">政治家と支援者と交流できます！</p>
                <p class="bg-dark-blue-sp">鎌倉の会と一体感が得れます！</p>
            </hgroup>
            <p class="volunteer-message s14 dark-blue">皆さんこんにちは。鎌倉の会の星あやとです。 いつもたくさんの応援やボランティア活動、ありがとうございます。 支持者の皆さんともっとつながり、支持者の皆さんにもっと鎌倉の会のことを知っていただくことで、一緒にこの会をつくっていきたい！そんな思いで、この特設サイトをつくりました。鎌倉の会は議員だけの政治団体ではありません。あなたと一緒に、活動を盛り上げていきたいと思います。 よろしくお願いします。</p><!-- /.volunteer-message -->
        </section><!-- /.about-volunteer -->
        <section class="form w800 dark-blue">
            <h2 class="form-title title-volunteer">ボランティアお申し込み</h2><!-- /.form-title -->
            <form action="" method="post" name="volunteer">
                <div class="volunteer-form">
                    <label for="volunteer" class="required">ボランティア</label>
                    <div class="radioarea">
                        <input type="radio" name="" id="">
                        <label for="">ポスティング</label>
                        <input type="radio" name="" id="">
                        <label for="">ポスター掲示</label>
                        <input type="radio" name="" id="">
                        <label for="">街頭活動サポート</label>
                    </div><!-- /.radioarea -->
                </div><!-- /.volunteer-form -->
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
                            </div><!-- /.radio2 -->
                        </div><!-- /.radiobox -->
                    </div><!-- /.form-area -->
                </div><!-- /.form-inner -->
                <div class="textarea center">
                    <p class="form-caution">※電話連絡をご希望の際はご都合の良い時間帯も併せてご連絡ください。</p>
                    <h3 class="s20 center">内容</h3>
                    <textarea name="" id="" rows="9" cols="36"></textarea>
                </div><!-- /.textarea -->
                <div class="submit-button">
                    <button type="submit" class="c-button c-button__submit">送信する</button>
                    <p class="caution">「プライバシーポリシー」の内容に同意して送信する。</p>
                </div><!-- /.submit-button -->
            </form>
        </section><!-- /.form -->
    </main><!-- /.main -->
    <?php get_footer();
