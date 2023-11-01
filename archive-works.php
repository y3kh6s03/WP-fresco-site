<?php
// Template Name: Works
?>

<?php get_header(); ?>

<main>
    <section class="subHero">
        <div class="subHero__title">
            <div class="subHero__title__inner">
                <h1 class="subHero__title__h1">
                    WORKS
                </h1>
            </div>
            <span class="subHero__title__bar"></span>
            <span class="subHero__title__ja">
                わたしたちの歩み
            </span>
        </div>
        <div class="subHero__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-images/worksHero.jpg" alt="" class="subHero__image__img">
        </div>
    </section>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <section class="contents container" id="<?php the_field("service-name") ?>">
                <div class="contents__header">
                    <div class="contents__header__inner">
                        <span class="contents__header__bar"></span>
                        <h3 class="contents__header__enName">
                            <?php the_field("service-name"); ?>
                        </h3>
                        <span class="contents__header__jaName">
                            <?php the_field("service-jaName"); ?>

                        </span>
                    </div>
                    <div class="contents__header__image">
                        <img src="<?php the_field("image"); ?>" alt="">
                    </div>
                </div>

                <div class="contents__description">
                    <div class="contents__description__author">
                        <p>
                            <span>customer:</span>
                            <?php the_field("author"); ?>
                        </p>
                    </div>
                    <p class="contents__description__p">
                        <?php the_field("description") ?>
                    </p>
                </div>
                <div class="contents__image">
                    <img src="<?php the_field("image2") ?>" alt="" class="contents__image__img">
                </div>
            </section>

    <?php endwhile;
    endif; ?>

    <!-- <section class="contents container">
        <div class="contents__header">
            <div class="contents__header__inner">
                <span class="contents__header__bar"></span>
                <h3 class="contents__header__enName">
                    Catering
                </h3>
                <span class="contents__header__jaName">
                    ケータリング事業
                </span>
            </div>
            <div class="contents__header__image">
                <img src="/images/works-images/bento.jpg" alt="">
            </div>
        </div>

        <div class="contents__description">
            <div class="contents__description__author">
                <p>
                    <span>customer:</span>
                    建設コンサルタンツ協会　さま
                </p>
            </div>
            <p class="contents__description__p">
                建設コンサルタンツ協会若手の会さま向けに、千曲市環境局主催で実施した腸内環境セミナーにて、お弁当のご提供を行いました。当日は、腸内環境に関する健康セミナーの内容に合わせてアレンジした、食物繊維や発酵食品たっぷりのメニューを作成。セミナーの内容を食事で体験し、実感できるコンテンツとしてご好評をいただきました。
            </p>
        </div>
        <div class="contents__image">
            <img src="/images/main-images/catering2.jpg" alt="" class="contents__image__img">
        </div>
    </section> -->

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