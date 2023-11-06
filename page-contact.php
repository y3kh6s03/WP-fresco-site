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

<section class="success container">
    <h2 class="success__title">
        お問い合わせが完了いたしました。
    </h2>
    <p class="success__p">
        お問い合わせいただきありがとうございます。<br>
        ２〜３営業日以内に担当者よりご連絡いたしますので、恐れ入りますがしばらくお待ちください。
    </p>
    <a href="<?php home_url(); ?>" class="pagelink">
        <span class="pagelink__name">
            HOME
        </span>
        <span class="pagelink__bar"></span>
        <span class="pagelink__arrow"></span>
        <span class="pagelink__text">Read more ...</span>
    </a>
</section>

<?php get_footer(); ?>