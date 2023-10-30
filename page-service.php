<?php
// Template Name: Service
?>

<?php get_header(); ?>

<main>
    <section class="subHero">
        <h1 class="subHero__title">
            Service
            <span class="subHero__title__bar"></span>
            <span class="subHero__title__ja">
                わたしたちの事業
            </span>
        </h1>
        <div class="subHero__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-images/serviceHero.jpg" alt="" class="subHero__image__img">
        </div>
    </section>

    <section class="contents">
        <div class="content__title philosophy__title">
            <div class="content__title__container">
                <div class="content__title__inner">
                    <h2 class="content__title__en">
                        KYUSHOKU
                    </h2>
                </div>
                <span class="content__title__bar"></span>
                <span class="content__title__ja">
                    給食受託事業
                </span>
            </div>
        </div>

        <div class="contents__wrapper">
            <div class="contents__inner">
                <div class="contents__headline">
                    <h4 class="contents__headline__ja">
                        五感で食事を楽しむ
                    </h4>
                    <span class="contents__headline__bar"></span>
                    <span class="contents__headline__en">
                        Enjoying through the five senses.
                    </span>
                </div>
                <p class="contents__description">
                    老健施設、特養施設、グループホーム、障害者支援施設などの施設へ給食を提供するサービスです。<br>
                    <br>
                    栄養基準にのっとった献立の立案、食材発注、調理までを一気通貫して行っています。地元・長野の食材や四季折々の旬の食材をふんだんに使ったバラエティ豊かな日常の献立に加えて、季節の移り変わりを感じるイベント食、施設様に合わせた企画食などもご提案。<br>
                    <br>
                    おいしく食べることはもちろん、楽しく食べる時間を大切にする「五感で楽しむ食体験」を提供します。<br>
                </p>
            </div>
            <div class="contents__image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main-images/kyushoku.jpg" alt="" class="contents__image__img">
            </div>
        </div>
        <a href="/service-detail/kyushoku.html" class="pagelink">
            <span class="pagelink__name">Kyushoku</span>
            <span class="pagelink__bar"></span>
            <span class="pagelink__arrow"></span>
            <span class="pagelink__text">Read more ...</span>
        </a>
    </section>

    <div class="contact__button">
        <a href="/contact" class="contact__button__a">
            <div class="contact__button__textinner">
                <span class="contact__button__textinner__ja">
                    お問い合わせ
                </span>
                <span class="contact__button__textinner__bar"></span>
                <span class="contact__button__textinner__click">
                    Click the link !!
                </span>
            </div>
        </a>
    </div>
</main>
<?php get_footer(); ?>