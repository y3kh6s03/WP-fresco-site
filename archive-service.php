<?php
// Template Name: Service
?>

<?php get_header(); ?>

<main>
    <section class="subHero">
        <div class="subHero__title">
            <div class="subHero__title__inner">
                <h1 class="subHero__title__h1">
                    SERVICE
                </h1>
            </div>
            <span class="subHero__title__bar"></span>
            <span class="subHero__title__ja">
                わたしたちの事業
            </span>
        </div>
        <div class="subHero__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-images/serviceHero.jpg" alt="" class="subHero__image__img">
        </div>
    </section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="contents">
                <div class="content__title philosophy__title">
                    <div class="content__title__container">
                        <div class="content__title__inner">
                            <h2 class="content__title__en">
                                <?php the_field("name") ?>
                            </h2>
                        </div>
                        <span class="content__title__bar"></span>
                        <span class="content__title__ja">
                            <?php the_field("ja-name") ?>
                        </span>
                    </div>
                </div>

                <div class="contents__wrapper">
                    <div class="contents__inner">
                        <div class="contents__headline">
                            <h4 class="contents__headline__ja">
                                <?php the_field("description-headline1") ?>
                            </h4>
                            <span class="contents__headline__bar"></span>
                            <span class="contents__headline__en">
                                <?php the_field("description-enHeadline") ?>
                            </span>
                        </div>
                        <p class="contents__description">
                            <?php the_field("description-text1") ?>
                        </p>
                    </div>
                    <div class="contents__image">
                        <img src="<?php the_field("description-image1") ?>" alt="" class="contents__image__img">
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="pagelink">
                    <span class="pagelink__name">
                        <?php the_field("name") ?>
                    </span>
                    <span class="pagelink__bar"></span>
                    <span class="pagelink__arrow"></span>
                    <span class="pagelink__text">Read more ...</span>
                </a>
            </section>
    <?php endwhile;
    endif; ?>

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