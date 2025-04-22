<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0, maximum-scale=1">
    <meta name="description" content="<?=bloginfo('description')?>" />
    <meta name="keywords" content="" />
    <title><?=bloginfo('name')?> | <?=bloginfo('description')?></title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

    <!-- Intl tel input -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <?php wp_head(); ?>
</head>

<body>
<!-- Main -->
<main class="wrapper">
    <!-- Hero -->
    <section class="hero">

        <!-- Header -->
        <header>
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- Header logo -->
                    <a href="index.html" class="header_logo">
                        <img src="<?=get_template_directory_uri()?>/assets/img/header_logo.png" alt="">
                    </a>

                    <!-- Links -->
                    <ul class="links">
                        <?php
                            wp_nav_menu( [
                                'theme_location' => 'Main',
                                'menu' => 'main-menu',
                                'container' => false, // Tashqi konteynerni olib tashlash
                                'menu_class' => '',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '%3$s', // Faqat <li> elementlarini qaytaradi
                                'depth' => 1,
                            ] );
                        ?>
                    </ul>

                    <!-- Phone number -->
                    <a href="tel:+79969497217" class="phone_number">+7 (996) 949-72-12</a>
                </div>
            </div>
        </header>

        <!-- Hero img -->
        <div class="hero_bg">
            <img src="<?=get_template_directory_uri()?>/assets/img/hero_bg.png" alt="">
        </div>

        <!-- Hero -->
        <div class="container hero_con">
            <!-- Hero title -->
            <h2>
                GEELY COOLRAY
            </h2>
            <!-- row -->
            <div class="row hero_row">
                <!-- Left side -->
                <div class="l_side">
                    <!-- Description informations -->
                    <ul class="info">
                        <!-- Info -->
                        <li>
                            Доствка за 15 дней.
                        </li>
                        <!-- Info -->
                        <li>
                            Без посредников и <br> рисков.
                        </li>
                        <!-- Info -->
                        <li>
                            Напрямую из Китая <br> в Чебоксары.
                        </li>
                        <!-- Info -->
                        <li>
                            Полная оплата — <br> только при получении.
                        </li>
                    </ul>
                </div>
                <!-- Right side -->
                <div class="r_side">
                    2 020 00 <img src="<?=get_template_directory_uri()?>/assets/img/rub.png" alt="">
                </div>
            </div>
            <!-- Buttons -->
            <div class="buttons">
                <a href="#" class="red_btn order_btn">ОСТАВИТЬ ЗАЯВКУ</a>
                <a href="#" class="white_btn consultation_btn">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
            </div>
        </div>