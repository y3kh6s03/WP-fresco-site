<?php
// Template Name: Contact
?>

<?php get_header(); ?>
<section class="subHero" id="hero">
    <div class="subHero__title">
        <div class="subHero__title__inner">
            <h1 class="subHero__title__h1">
                CONTACT</h1>
        </div><span class="subHero__title__bar"></span><span class="subHero__title__ja">お問い合せ</span>
    </div>
    <div class="subHero__image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/service-images/serviceHero.jpg" alt="contact-image" class="subHero__image__img">
    </div>
</section>
<?php the_content(); ?>

<?php get_footer(); ?>