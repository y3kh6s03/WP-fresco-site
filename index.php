<?php get_header(); ?>

<section id="hero" class="hero">
    <div class="hero__container">
        <div class="hero__title">
            <p class="hero__title__p">
                FRESCO COMPANY
            </p>
            <div class="hero__title__inner">
                <h1>
                    MEAL FOR SMILE.
                </h1>
            </div>
            <span class="hero__title__bar"></span>
            <span class="hero__title__subtitle">
                人生に最高の食体験を
            </span>
        </div>

        <div class="hero__link">
            <a href="https://fresco-recruit2025.netlify.app/" class="hero__link__a">
                <span class="hero__link__a__enTitle">Fresco Recruit</span>
                <span class="hero__link__a__jaTitle">フレスコ
                    ・カンパニー採用情報
                </span>
                <span class="hero__link__a__bar"></span>
            </a>
            <a href="https://fresco-catering.netlify.app/" class="hero__link__a">
                <span class="hero__link__a__enTitle">Catering Service</span>
                <span class="hero__link__a__jaTitle">あなたの食べたいをプレオーダー
                </span>
                <span class="hero__link__a__bar"></span>
            </a>
        </div>
        <nav class="hero__nav">
            <ul class="hero__nav__ul">
                <li class="hero__nav__ul__li">
                    <a href="<?php echo home_url(); ?>">Home
                        <span>ホーム</span>
                    </a>
                </li>
                <li class="hero__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/about">About
                        <span>わたしたちについて</span>
                    </a>
                </li>
                <li class="hero__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/future">Future
                        <span>わたしたちの未来</span>
                    </a>
                </li>
                <li class="hero__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/service">Service
                        <span>わたしたちの事業</span>
                    </a>
                </li>
                <li class="hero__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/works">Works
                        <span>わたしたちの歩み</span>
                    </a>
                </li>
                <li class="hero__nav__ul__li">
                    <a href="#">Recruit
                        <span>わたしたちの採用情報</span>
                    </a>
                </li>
                <li class="hero__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/contact">Contact
                        <span>お問い合わせ</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<section class="about container">
    <div class="content__title about__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    About
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                わたしたちについて
            </span>
        </div>
        <div class="about__title__image">
            <img src="<?php echo get_template_directory_uri() ?>/images/main-images/catering2.jpg" alt="images" class="about__title__image__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/main-images/catering6.jpg" alt="images" class="about__title__image__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/main-images/catering7.jpg" alt="images" class="about__title__image__img">
        </div>
    </div>
    <div class="about__description">
        <p class="about__description__p">
            フレスコカンパニーは、北信地域を中心に施設給食事業を展開し、全国各地に向けてケータリング事業などを行う”食の専門企業”です。みなさまの笑顔をつくるあらゆる食体験を提供していま す。
        </p>
        <a href="<?php echo home_url(); ?>/about" class="pagelink">
            <span class="pagelink__name">About</span>
            <span class="pagelink__bar"></span>
            <span class="pagelink__arrow"></span>
            <span class="pagelink__text">Read more ...</span>
        </a>
    </div>
    <div class="about__image">
        <div class="about__image__container">
            <img src="<?php echo get_template_directory_uri() ?>/images/main-images/slide_004.png" alt="images" class="about__image__container__img1">
            <img src="<?php echo get_template_directory_uri() ?>/images/main-images/dietician4.jpg" alt="images" class="about__image__container__img2">
        </div>
    </div>
</section>

<section class="future container">
    <div class="content__title future__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    Future
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                わたしたちの未来
            </span>
        </div>
    </div>

    <div class="future__description__wrapper">
        <img id="future__img" src="<?php echo get_template_directory_uri() ?>/images/main-images/healthy-body.jpg" alt="index-image">
        <div class="future__description">
            <h3 class="future__description__title">
                食を通じて、<br>すこやかな未来をつくりたい
            </h3>
            <p class="future__description__text">
                食事からとる栄養は、生きていくために欠かせないものです。
                しかし、生きるために必要なことは 食事だけではありません。健康づくりや地球環境保全など人生のためのあらゆる物事を、食事を 通じてよりよくしていきたい。
                フレスコカンパニーは、”食べる”を通じて今を生きる私たちや未来の 子供たちに笑顔あふれる人生を提供します。
            </p>
            <a href="<?php echo home_url(); ?>/future" class="pagelink">
                <span class="pagelink__name">Future</span>
                <span class="pagelink__bar"></span>
                <span class="pagelink__arrow"></span>
                <span class="pagelink__text">Read more ...</span>
            </a>
        </div>
    </div>
</section>

<section class="service container">
    <div class="content__title service__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    Service
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                わたしたちの事業
            </span>
        </div>
    </div>



    <ul class="service__list">
        <li class="service__list__item">
            <a href="<?php echo home_url(); ?>/service/kyushoku">
                <div class="service__list__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/kyushoku.jpg" alt="images" />
                    <p>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>01</span>
                    </p>
                </div>
            </a>
            <a href="<?php echo home_url(); ?>/service/kyushoku" class="service__list__item__link">
                <span>
                    給食受託事業
                </span>
                <span>

                </span>
                <span></span>
            </a>
        </li>
        <li class="service__list__item">
            <a href="<?php echo home_url(); ?>/service/support">
                <div class="service__list__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/dietician4.jpg" alt="images" />
                    <p>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>02</span>
                    </p>
                </div>
            </a>
            <a href="<?php echo home_url(); ?>/service/support" class="service__list__item__link">
                <span>
                    直営給食サポート事業
                </span>
                <span>

                </span>
                <span></span>
            </a>
        </li>
        <li class="service__list__item">
            <a href="<?php echo home_url(); ?>/service/catering">
                <div class="service__list__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/catering4.JPG" alt="images" />
                    <p>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>03</span>
                    </p>
                </div>
            </a>
            <a href="<?php echo home_url(); ?>/service/catering" class="service__list__item__link">
                <span>
                    ケータリング事業
                </span>
                <span>
                </span>
                <span></span>
            </a>
        </li>
        <li class="service__list__item">
            <a href="<?php echo home_url(); ?>/service/frozen-yogurt">
                <div class="service__list__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/frozen.jpg" alt="images" />
                    <p>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>04</span>
                    </p>
                </div>
            </a>
            <a href="<?php echo home_url(); ?>/service/frozen-yogurt" class="service__list__item__link">
                <span>
                    フローズンヨーグルト事業
                </span>
                <span>
                </span>
                <span></span>

            </a>
        </li>
    </ul>


    <div class="circle">
        <div class="circle__wrapper">
            <svg class="circle__wrapper__inner" viewBox="0 0 100 100">
                <path id="circle__wrapper__inner__path" class="circle__wrapper__inner__path" d="M 0 50 A 50 50 0 1 1 0 51 z" />
                <text class="circle__wrapper__inner__text">
                    <textPath href="#circle__wrapper__inner__path">
                        Fresco company. Meal for smile.
                    </textPath>
                </text>
            </svg>
        </div>
    </div>
</section>

<section class="works container">
    <div class="content__title works__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    Works
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                わたしたちの事業
            </span>
        </div>
    </div>


    <div class="swiper">
        <div class="swiper-wrapper">
            <?php $wp_query = new WP_Query();
            $works_post = array(
                "post_type" => "works",
                "posts_per_page" => "8"
            );
            $wp_query->query($works_post);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
                    <div class="swiper-slide">
                        <a href="<?php home_url(); ?>/works#<?php the_field("service-name"); ?>">
                            <img src="<?php the_field("image"); ?>" alt="images">
                            <div class="text__container">
                                <span class="works__service"><?php the_field("service-name") ?></span>
                                <span class="works__service__author"><?php the_field("author") ?></span>
                            </div>
                        </a>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

        </div>
    </div>

    <div class="works__swipe">
        <span class="works__swipe__text">Swipe</span>
        <span class="works__swipe__bar"></span>
    </div>

</section>

<section class="recruit container">
    <div class="recruit__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/main-images/student_hero.jpg" alt="images" class="recruit__image__img">
    </div>
    <div class="content__title recruit__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    Recruit
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                わたしたちの事業
            </span>
        </div>
    </div>
    <div class="recruit__description">
        <div class="recruit__description__title">
            <h3>食で未来を変えていく。</h3>
        </div>
        <div class="recruit__description__text">
            <p>
                生まれてからこの世を去るまで、誰もが行う食事。<br>
                しかし、食の可能性は私たちの体を生かすことだけにとどまりません。<br>
                たくさんの人の健康を、環境保全を、生産者のみなさまの課題解決を、 あらゆることを食のチカラで実現したい。<br>
                食のチカラを信じる仲間とともに、新たな未来を一緒に作りませんか?
            </p>
        </div>
        <a href="https://fresco-recruit2025.netlify.app/" class="pagelink">
            <span class="pagelink__name">Recruit</span>
            <span class="pagelink__bar"></span>
            <span class="pagelink__arrow"></span>
            <span class="pagelink__text">Read more ...</span>
        </a>
    </div>
</section>

<section class="info container">

    <div class="content__title info__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    Information
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                インフォーメーション
            </span>
        </div>
    </div>

    <div class="info__container">
        <div class="info__inner">
            <a href="https://fresco-support.netlify.app/" class="info__item">
                <div class="info__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/dietician3.jpg" alt="images" class="info__item__image__img">
                </div>
                <div class="info__item__text">
                    <p class="info__item__text__p">
                        Support
                    </p>
                    <span class="info__item__text__bar"></span>
                    <span class="info__item__text__arrow"></span>
                    <span class="info__item__text__ja">直営給食サポート事業</span>
                    <span class="info__item__text__click">Click the link !!</span>
                </div>
            </a>
        </div>


        <div class="info__inner">
            <a href="https://fresco-catering.netlify.app/" class="info__item">
                <div class="info__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/catering4.JPG" alt="images" class="info__item__image__img">
                </div>
                <div class="info__item__text">
                    <p class="info__item__text__p">
                        Catering
                    </p>
                    <span class="info__item__text__bar"></span>
                    <span class="info__item__text__arrow"></span>
                    <span class="info__item__text__ja">ケータリング事業</span>
                    <span class="info__item__text__click">Click the link !!</span>
                </div>
            </a>
        </div>


        <div class="info__inner">
            <a href="https://www.taiseisangyo.com/" class="info__item">
                <div class="info__item__image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/main-images/taisei.jpg" alt="images" class="info__item__image__img">
                </div>
                <div class="info__item__text">
                    <p class="info__item__text__p">
                        Taisei Sangyo
                    </p>
                    <span class="info__item__text__bar"></span>
                    <span class="info__item__text__arrow"></span>
                    <span class="info__item__text__ja">大成産業株式会社</span>
                    <span class="info__item__text__click">Click the link !!</span>
                </div>
            </a>
        </div>

    </div>


</section>

<section class="contact container">
    <div class="content__title contact__title">
        <div class="content__title__container">
            <div class="content__title__inner">
                <h2 class="content__title__en">
                    Contact
                </h2>
            </div>
            <span class="content__title__bar"></span>
            <span class="content__title__ja">
                インフォーメーション
            </span>
        </div>
    </div>

    <div class="contact__contents">
        <p class="contact__contents__p">
            事業やお仕事など、<br>
            お気軽にお問い合わせください。
        </p>
    </div>

    <div class="contact__button">
        <a href="<?php echo home_url(); ?>/contact" class="contact__button__a">
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
</section>

<?php get_footer(); ?>