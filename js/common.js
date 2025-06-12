document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById('hamburger');
    const nav = document.querySelector('.main-nav');
    const body = document.body;

    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('active');
            nav.classList.toggle('open');
            body.classList.toggle('fixed');

            // アニメーション制御（スライド）
            if (nav.classList.contains('open')) {
                nav.style.maxHeight = nav.scrollHeight + "px";
            } else {
                nav.style.maxHeight = null;
            }
        });
    }
});
