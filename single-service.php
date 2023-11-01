<?php get_header(); ?>

<main>
    <section class="subHero">
        <div class="subHero__title">
            <div class="subHero__title__inner">
                <h1 class="subHero__title__h1">
                    <?php the_field("name") ?>
                </h1>
            </div>
            <span class="subHero__title__bar"></span>
            <span class="subHero__title__ja">
                <?php the_field("ja-name") ?>
            </span>
        </div>
        <div class="subHero__image">
            <img src="<?php the_field("main-image") ?>" alt="" class="subHero__image__img">
        </div>
    </section>

    <div class="section__headline">
        <h3>
            <?php the_field("headline") ?>
        </h3>
    </div>

    <section class="contents container">

        <div class="contents__inner">
            <h4 class="contents__headline">
                <?php the_field("description-headline1"); ?>
            </h4>
            <div class="contents__inner__p">
                <?php the_field("description-text1") ?>
            </div>
        </div>
        <div class="contents__inner__image">
            <img src=<?php the_field("description-image1") ?> alt="">
        </div>
    </section>
    <section class="contents container">

        <div class="contents__inner">
            <h4 class="contents__headline">
                <?php the_field("description-headline2") ?>
            </h4>
            <div class="contents__inner__p">
                <?php the_field("description-text2") ?>

            </div>
        </div>
        <div class="contents__inner__image">
            <img src=<?php the_field("description-image2") ?> alt="">
        </div>
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