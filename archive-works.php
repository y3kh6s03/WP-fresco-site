<?php
// Template Name: Works
?>

<?php get_header(); ?>

<main>
    <section class="subHero" id="hero">
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-images/worksHero.jpg" alt="works-image" class="subHero__image__img">
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
                        <img src="<?php the_field("image"); ?>" alt="works-image">
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
                    <img src="<?php the_field("image2") ?>" alt="works-image" class="contents__image__img">
                </div>
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