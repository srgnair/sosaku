<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <title>創作</title>
</head>
<body>
<header>
    <div class="header__top">
        <h1 class="header__title"><a href="#"><img src="{{ asset('images/logo.svg') }}" alt="創作"></a></h1>
        <nav class="header__menu">
            <li><a href="#news">お知らせ</a></li>
            <li><a href="#product">商品のご紹介</a></li>
            <li><a href="#map">店舗のご案内</a></li>
        </nav>
    </div>
    <div class="header__link-container">
        <div class="header__online-link">
            <a href="#">オンラインストアを見る</a>
        </div>
    </div>
</header>
<main>
    <section id="news" class="news section">
        <h2 class="news__title section-title">
            <span class="news__en-title en-title">News</span>
            <span class="news__ja-title ja-title">お知らせ</span>
        </h2>
        <dl class="news__list">
            <div class="news__list-item">
                <dt><time datetime="2021-01-01">2021.01.01</time></dt>
                <dd>タイトルタイトルタイトルタイトル</dd>
            </div>
            <div class="news__list-item">
                <dt><time datetime="2021-01-01">2021.01.01</time></dt>
                <dd>タイトルタイトルタイトルタイトル</dd>
            </div>
            <div class="news__list-item">
                <dt><time datetime="2021-01-01">2021.01.01</time></dt>
                <dd>タイトルタイトルタイトルタイトル</dd>
            </div>
            <div class="news__list-item">
                <dt><time datetime="2021-01-01">2021.01.01</time></dt>
                <dd>タイトルタイトルタイトルタイトル</dd>
            </div>
            <div class="news__list-item">
                <dt><time datetime="2021-01-01">2021.01.01</time></dt>
                <dd>タイトルタイトルタイトルタイトル</dd>
            </div>
        </dl>
    </section>
    <section id="product" class="product section">
        <h2 class="product__title section-title">
            <span class="product__ja-title ja-title">新しい価値の創造</span>
            <span class="product__en-title en-title">Create New Values</span>
        </h2>
        <div class="product__container">
            <div class="product__image">
                <img src="{{ asset('images/products1.jpg') }}"  alt="">
            </div>
            <div class="product__text yellow">
                <p>テキストテキスト</p>
                <p>テキストテキスト</p>
            </div>
        </div>
    </section>
    <section class="product--reverse section">
        <h2 class="product__title section-title">
            <span class="product__ja-title ja-title">科学と技術の調和</span>
            <span class="product__en-title en-title">Science & Technology</span>
        </h2>
        <div class="product__container">
            <div class="product__image">
                <img src="{{ asset('images/products2.jpg') }}"  alt="">
            </div>
            <div class="product__text brown">
                <p>テキストテキスト</p>
                <p>テキストテキスト</p>
            </div>
        </div>
    </section>
    <div id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.5575725236104!2d139.72721448529234!3d35.66327060192623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b826ae3281d%3A0xf2a258ed2d09f4e!2z5YWt5pys5pyo6aeF!5e0!3m2!1sja!2sjp!4v1742595109525!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>
<footer>
    <div class="footer__top">
        <div class="footer__right">
            <h2 class="footer__title"><a href="#"><img src="{{ asset('images/logo.svg') }}" alt="創作"></a></h2>
            <div class="footer__info">
                <p class="footer__addles">〒１０６ー００３２ 東京都港区六本木５丁目×××××</p>
                <p class="footer__tel">電話：０３ーＸＸＸＸーＸＸＸＸ</p>
            </div>
            <ul>
                <li><a href="#news">お知らせ</a></li>
                <li><a href="#product">商品のご紹介</a></li>
                <li><a href="#map">店舗のご案内</a></li>
            </ul>
        </div>
        <div class="footer__left">
            <a href="#" class="footer__online-link">オンラインストアを見る</a>
            <span>－</span>
            <a href="#" class="footer__contact-link">お問い合わせ</a>
        </div>
    </div>
    <p class="footer__copy">&copy; SOUSAKU</p>
</footer>
</body>
</html>