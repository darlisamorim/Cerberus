<?php
/**
 * @source     header.php
 * @location   resources/views/partials/header.php
 * @summary    Cabeçalho HTML principal do site, incluindo charset, viewport, metas e fontes.
 *
 * @author     Darlis A. Amorim <eu@darlisalvesamorim.com>
 * @see        https://github.com/darlisamorim/Cerberus
 * @package    Cerberus
 */
?><!DOCTYPE html>
<html lang="{{ $locale }}" itemscope itemtype="{{ $schema }}" prefix="og: {{ $schema_open_graph }}">
<!-- Set your country language and website schema -->

<head>
    <meta charset="{{ $charset }}"/> <!-- Unicode default( UTF-8 )  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Default vieweport responsive design -->
    <title>{{ $name }} | {{ $subname }}</title> <!-- Website Title -->

    <!-- Defaults Metas -->
    <meta name="description" content="{{ $description }}"/> <!-- Website Description -->
    <meta name="robots" content="index, follow"/> <!-- Allow browsers to index -->
    <meta name="google-site-verification" content="{{ $google_veri }}"/> <!-- Tag Google -->

    <!-- Defaults Links -->
    <link rel="base" href="{{ $domain }}"/> <!-- Website Url -->
    <link rel="canonical" href="{{ $domain }}"/> <!-- Website Url -->
    <link rel="alternate" type="application/rss+xml" href="{{ $domain }}/rss.xml"/> <!-- RSS Url -->
    <link rel="sitemap" type="application/xml" href="{{ $domain }}/sitemap.xml"/> <!-- Sitemap Url -->
    <link rel="author" href="{{ $linkedin }}"/>
    <!-- Personal profile of the author of the site ( Example Facebook profile )  -->
    <link rel="publisher" href="{{ $linkedin }}"/>
    <!-- Personal website page (Example website page on Facebook) -->

    <?php BladeEnv::metas(); ?>
    <!-- All Metas( Itemprop and Property ( Og:, Article:, Twitter: ) ) -->

    <link rel="shortcut icon" href="{{ $domain }}/_storage/images/{{ $image_favicon }}"/> <!-- Imagem Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family={{ $font_name }}:wght@{{ $font_weight }}&display=swap"
          rel="stylesheet"> <!-- Importing font from google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- All Styles -->
    <link rel="stylesheet" href="_storage/css/components/cssoo.css"> <!-- Defines CSS -->
    <link rel="stylesheet" href="_storage/css/components/normalize.css">
    <!-- Reset CSS -> https://necolas.github.io/normalize.css/ -->
    <link rel="stylesheet" href="_storage/css/components/reset.css"> <!-- Reset CSS -->

    <link rel="stylesheet" href="_storage/css/components/boxicons.css"> <!-- Boxicons -> https://boxicons.com/ -->
    <link rel="stylesheet" href="_storage/css/components/fontawesome.css">
    <!-- Fontawesome -> https://fontawesome.com/icons -->
    <link rel="stylesheet" href="_storage/css/components/line-awesome.css">
    <!-- Line-Awesome -> https://icons8.com/line-awesome -->

    <link rel="stylesheet" href="_storage/css/components/iconscout.css">
    <!-- Iconscout -> https://iconscout.com/ *Pending -->
    <link rel="stylesheet" href="_storage/css/components/icomoon.css"> <!-- Icomoon -> https://icomoon.io/ *Pending -->

    <link rel="stylesheet" href="_storage/css/folds/header.css">
    <link rel="stylesheet" href="_storage/css/folds/main.css">
    <link rel="stylesheet" href="_storage/css/folds/footer.css">

    <link rel="stylesheet" href="_storage/css/components/queries.css"> <!-- Media Queries -->
    <link rel="stylesheet" href="_storage/css/components/animate.css"> <!-- Animete Style -->

    <!--[if lt IE 9]>
    <script src="{{ $domain }}/_storage/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<header class="header container">
    <div class="content__flex">
        <h1 class="header__logotipo">
            <strong>Darlis</strong> Alves Amorim<b>_</b> <span class="dn">| {{ $description }}</span>
        </h1>

        <nav class="header__menu">
            <h3 class="fz">
                Navegação | {{ $name }}
            </h3>
            <ul>
                <li><a title="Portfólios | {{ $name }}" href="">Portfólios</a></li>
                <li><a title="Open Source | {{ $name }}" href="">Open Source</a></li>
                <li><a title="Notas | {{ $name }}" href="">Notas</a></li>
            </ul>
        </nav>
        <ul class="header__tools">
            <li class="dn">
                <i class='bx bxs-sun'></i>
            </li>
            <li class="dn">
                <i class='bx bxs-moon'></i>
            </li>
            <li>
                <a title="Links Sociais | {{ $name }}" href="{{ $links }}" target="_blank">
                    <i class='bx bxs-share-alt'></i>
                    Social
                </a>
            </li>
            <li>
                <a title="GitHub | {{ $name }}" href="https://www.github.com/{{ $github }}" target="_blank">
                    <i class='bx bxl-github'></i>
                    GitHub
                </a>
            </li>
            <li>
                <a title="Linkedin | {{ $name }}" href="{{ $linkedin }}" target="_blank">
                    <i class='bx bxl-linkedin-square'></i>
                    Linkedin
                </a>
            </li>
            <li class="dn">
                <i class='bx bx-menu'></i>
                <i class='bx bx-menu-alt-right'></i>
            </li>
        </ul>

    </div>

    <div class="content__flex">
        <article class="header__article">
            <header class="header__article__group">
                <h2>
                    {{ $office }}
                </h2>
                <h3>
                    {{ $subname }}
                </h3>
            </header>
            <p>
                {{ $description }}
            </p>
            <button><i class="bx bxs-download"></i> Download CV</button>
        </article>
        <figure class="header__figure">
            <img width="440" src="{{ $domain }}/_storage/images/developer.svg" title="{{ $name }}"
                 alt="{{ $description }}">
        </figure>
    </div>


</header>
<!-- Fim Header > container -->