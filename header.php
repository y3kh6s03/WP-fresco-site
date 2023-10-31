<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="header__logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/main-images/logo-1.png" alt="images" class="header__logo__image">
            </a>
        </div>
        <div class="header__icon">
            <span class="header__icon__bar"></span>
            <span class="header__icon__bar"></span>
        </div>
        <nav class="header__nav">
            <p class="header__nav__title">
                Navigation
            </p>
            <ul class="header__nav__ul">
                <li class="header__nav__ul__li">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span>ホーム</span>
                </li>
                <li class="header__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/about">About</a>
                    <span>わたしたちについて</span>
                </li>
                <li class="header__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/future">Future</a>
                    <span>わたしたちの未来</span>
                </li>
                <li class="header__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/service">Service</a>
                    <span>わたしたちの事業</span>
                </li>
                <li class="header__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/works">Works</a>
                    <span>わたしたちの歩み</span>
                </li>
                <li class="header__nav__ul__li">
                    <a href="#">Recruit</a>
                    <span>わたしたちの採用情報</span>
                </li>
                <li class="header__nav__ul__li">
                    <a href="<?php echo home_url(); ?>/contact">Contact</a>
                    <span>お問い合わせ</span>
                </li>
            </ul>
        </nav>
        <span class="header__bcc"></span>
    </header>