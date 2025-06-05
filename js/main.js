// swiper
document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper(".swiper", {
        // ループの設定
        loop: true,
        // ページネーションの設定
        pagination: {
            el: ".swiper-pagination",// DOMから指定のセレクタを拾う
            clickable: true,// クリックさせるか
        },
        // ナビゲーションの設定
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

// micromodal
window.addEventListener("DOMContentLoaded", () => {
    // ページ内リンクの取得
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    // NodeList を Array に変換
    const anchorLinksArr = Array.from(anchorLinks);
    // ハンバーガーメニューボタンの取得
    const btn = document.querySelector("#js-buttonHamburger");
    // ページ内リンクのクリックイベントリスナー
    anchorLinksArr.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault(); // デフォルトの挙動をキャンセル
            const targetId = link.hash; // リンク先の要素のIDを取得
            const targetElement = document.querySelector(targetId); // リンク先の要素を取得
            const targetoffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top; // スクロール量を取得
        // メニューが開いている場合は閉じる
        if (btn.ariaExpanded == "true") {
            btn.ariaExpanded = false;
        }
        // 全てのページ内リンク要素の ariaExpanded を false にする
        anchorLinksArr.forEach((link) => {
            link.ariaExpanded = false;
        });
            MicroModal.close("modal-1"); // モーダルを閉じる
            // // スムーススクロール
            window.scrollTo({
                top: targetoffsetTop,
                behavior: "smooth", // スムーススクロールを有効にする
                });
            });
        });
        // ハンバーガーメニューボタンのクリックイベントリスナー
        btn.addEventListener("click", function () {
            if (btn.ariaExpanded == "false") {
                btn.ariaExpanded = true;
                MicroModal.show("modal-1", {
                    disableScroll: true, // スクロールを無効化
                    awaitOpenAnimation: true, // 開くアニメーションの完了を待つ
                    });
                } else {
                    btn.ariaExpanded = false;
                    MicroModal.close("modal-1", {
                        awaitCloseAnimation: true, // 閉じるアニメーションの完了を待つ
                        });
                    }
                });
                // オーバーレイのクリックイベントリスナー
                overlay.addEventListener("click", function () {
                    btn.ariaExpanded = false;
                    MicroModal.close("modal-1", {
                        awaitCloseAnimation: true, // 閉じるアニメーションの完了を待つ
                        });
                        overlay.classList.remove("active"); // オーバーレイを非表示にする
                        });
                        // ESCキーが押された時の処理
                        document.addEventListener("keydown", function (e) {
                            if (e.key === "Escape") {
                                btn.ariaExpanded = false;
                                MicroModal.close("modal-1", {
                                    awaitCloseAnimation: true, // 閉じるアニメーションの完了を待つ
                                    });
                                    overlay.classList.remove("active"); // オーバーレイを非表示にする
                                    }
                                });
                            });

// 画像変更機能
function changeSlideImage(slideIndex, newImageSrc) {
    const slides = document.querySelectorAll('.swiper-slide');
    if (slideIndex >= 0 && slideIndex < slides.length) {
        const slide = slides[slideIndex];
        const img = slide.querySelector('img');
        slide.setAttribute('data-image-src', newImageSrc);
        img.src = newImageSrc;
    }
}

// 使用例：
// changeSlideImage(0, './img/new-image.jpg'); // 1枚目のスライドの画像を変更
// changeSlideImage(1, './img/another-image.jpg'); // 2枚目のスライドの画像を変更
// changeSlideImage(2, './img/third-image.jpg'); // 3枚目のスライドの画像を変更
