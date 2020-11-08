<?php
require '../components/Translate.php';
$t = new Translate();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">

    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@400;600;700&display=swap"
          rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.min.css">
</head>
<body>

<div class="navbar-container fixed-top">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg justify-content-between navbar-light bg-light w-100">
                <a class="navbar-brand mr-auto" href="#hero" data-scroll-item="true"><img src="/images/logo.png" alt="Danisman" loading="lazy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain"
                        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#bemutatkozas" data-scroll-item="true"><?= $t->trans('welcome'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#szolgaltatasok" data-scroll-item="true"><?= $t->trans('services'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#referenciak" data-scroll-item="true"><?= $t->trans('references'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kapcsolat" data-scroll-item="true"><?= $t->trans('contact'); ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $t->currentLanguageShortCode ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/">HU</a>
                                <a class="dropdown-item" href="/tr">TR</a>
                                <a class="dropdown-item" href="/en">EN</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<section class="hero" id="hero">
    <h1 class="hero__headline" data-aos="fade-up"><?= $t->trans('hero-headline'); ?></h1>
    <h2 class="hero__sub-headline" data-aos="fade-up"><?= $t->trans('hero-sub-headline'); ?></h2>
</section>

<main class="content" id="bemutatkozas">
    <h2 class="with-underline" data-aos="fade-up"><?= $t->trans('welcome'); ?></h2>
    <p data-aos="fade-right"><?= $t->trans('welcome-text-1'); ?></p>

    <p data-aos="fade-left"><?= $t->trans('welcome-text-2'); ?></p>

    <p data-aos="fade-right"><strong><?= $t->trans('welcome-text-3'); ?></strong></p>

    <div class="content__text content__text--p-50">
        <p data-aos="fade-left"><?= $t->trans('welcome-text-4'); ?></p>
    </div>

    <div class="content__text content__text--p-100">
        <p data-aos="fade-right"><?= $t->trans('welcome-text-5'); ?></p>

        <p data-aos="fade-left"><strong><?= $t->trans('welcome-text-6'); ?></strong></p>
    </div>

    <div class="content__text content__text--p-140">
        <p data-aos="fade-right"><?= $t->trans('welcome-text-7'); ?></p>
    </div>
</main>

<section class="container">
    <div class="row">
        <div class="col">
            <div class="card-with-shadow" data-aos="zoom-in">
                <?= $t->trans('quote-1'); ?>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col">
            <div class="business-card" data-aos="zoom-in-right">
                <img src="/images/laki_judit.jpg" alt="Laki Judit" class="business-card__image scale-on-hover">
                <h2 class="business-card__name">Laki Judit</h2>
                <span class="business-card__role"><?= $t->trans('consultant'); ?></span>
            </div>
        </div>

        <div class="col">
            <div class="business-card" data-aos="zoom-in-left">
                <img src="/images/sezen_mustafa.jpg" alt="Sezen Mustafa" class="business-card__image scale-on-hover">
                <h2 class="business-card__name">Sezen Mustafa</h2>
                <span class="business-card__role"><?= $t->trans('consultant'); ?></span>
            </div>
        </div>
    </div>
</section>

<div class="overflow-hidden">
    <img src="/images/blokk.jpg" alt="" data-aos="zoom-out" class="scale-on-hover">
</div>

<section class="container" data-aos="zoom-in">
    <div class="row">
        <div class="col">
            <div class="card-with-shadow card-with-shadow--offset-y">
                <?= $t->trans('quote-2'); ?>
            </div>
        </div>
    </div>
</section>

<section class="container" id="szolgaltatasok">
    <div class="row">
        <div class="col">
            <h2 class="with-underline" data-aos="fade-up"><?= $t->trans('services'); ?></h2>
            <div class="row mb-5">
                <div class="col">
                    <ul class="custom-list-style">
                        <li data-aos="fade-left"><?= $t->trans('services-left-1'); ?></li>
                        <li data-aos="fade-left"><?= $t->trans('services-left-2'); ?></li>
                        <li data-aos="fade-left"><?= $t->trans('services-left-3'); ?></li>
                        <li data-aos="fade-left"><?= $t->trans('services-left-4'); ?></li>
                        <li data-aos="fade-left"><?= $t->trans('services-left-5'); ?></li>
                        <li data-aos="fade-left"><?= $t->trans('services-left-6'); ?></li>
                    </ul>
                </div>

                <div class="col">
                    <ul class="custom-list-style">
                        <li data-aos="fade-right"><?= $t->trans('services-right-1'); ?></li>
                        <li data-aos="fade-right"><?= $t->trans('services-right-2'); ?></li>
                        <li data-aos="fade-right"><?= $t->trans('services-right-3'); ?></li>
                        <li data-aos="fade-right"><?= $t->trans('services-right-4'); ?></li>
                        <li data-aos="fade-right"><?= $t->trans('services-right-5'); ?></li>
                        <li data-aos="fade-right"><?= $t->trans('services-right-6'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container" id="referenciak">
    <div class="row">
        <div class="col">
            <h2 class="with-underline" data-aos="fade-up"><?= $t->trans('references'); ?></h2>

            <div class="row align-items-center text-center">
                <div class="col-12 col-sm-6 mb-5" data-aos="fade-left">
                    <a href="http://www.mghweb.hu/" target="_blank"><img src="/images/malev-gh-logo.jpg" alt="Malév ground handling" class="scale-on-hover"></a>
                </div>
                <div class="col-12 col-sm-6 mb-5" data-aos="fade-right">
                    <a href="http://blokkmedia.com" target="_blank"><img src="/images/BLOKK MEDIA CO LOGO SZINES FEHER ALAPON.jpg" alt=" Blokk Média" class="scale-on-hover"></a>
                </div>
                <div class="col-12 col-sm-6 mb-5" data-aos="fade-left">
                    <a href="http://jurantis.hu" target="_blank"><img src="/images/JURANTIS LOGO.jpg" alt="Jurantis" class="scale-on-hover"></a>
                </div>
                <div class="col-12 col-sm-6 mb-5" data-aos="fade-right">
                    <a href="https://mkik.hu/" target="_blank"><img src="/images/mkik-300x300.jpg" alt="Magyar kereskedelmi és iparkamara" class="scale-on-hover"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col">
            <h2 class="with-underline" data-aos="fade-up" id="kapcsolat"><?= $t->trans('contact'); ?></h2>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 overflow-hidden">
            <img src="/images/Terkep.jpg" alt="" data-aos="zoom-in" class="scale-on-hover">
        </div>

        <div class="col-12 col-md-6 contact">
            <p data-aos="fade-up"><img src="/images/contact.jpg" alt="" class="contact__icon">Danisman Tanácsadó Kft.
            </p>
            <p data-aos="fade-up"><img src="/images/mail.jpg" alt="" class="contact__icon"><a
                        href="mailto:info@danisman.hu">info@danisman.hu</a>
            </p>
            <p data-aos="fade-up"><img src="/images/place1.jpg" alt="" class="contact__icon">1111. Budapest, Bertalan
                Lajos u. 22.</p>
        </div>
    </div>
</section>

<footer class="footer">
    CREATED BY BLOKK MEDIA ZRT.
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/app.min.js"></script>
</body>
</html>