<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Luca Lemaire">
    <meta name="title" content="Luca Lemaire">
    <meta name="keywords" content="site-client, SEF Huy, Front-end, Back-end, Fullstack, Développeur web, étudiant à l'HEPL, Développeur Wordpress">
    <meta name="description" content="Il s’agit d'un site web créer spécialement pour une asbl (SEF Huy) qui a grandement besoin de revoir la direction artistique de son site actuel. Se site va permettre de se renseigner sur l'asbl, connaitre ces valeurs et ses engagments tout en ayant la possbilité de leur venir en aide par leurs différenet moyen">
    <meta property="profile:first_name" content="Luca">
    <meta property="profile:last_name" content="Lemaire">
    <title>
        <?php
        get_bloginfo('name');
        ?>
    </title>
    <link rel="stylesheet" href="<?= dw_asset('css/style.css') ?>">
</head>
<body>
<noscript>
    <p class="no-js__message">
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.<br>
        Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">instructions
            pour activer JavaScript dans votre navigateur Web</a>.
    </p>
</noscript>
<header>
    <h1 role="heading" aria-level="1" class="hidden">SEF</h1>
    <nav class="navigation" role="navigation">
        <h2 class="hidden" role="heading" aria-level="2">Navigation principale</h2>
        <h3><a href="<?= home_url(); ?>" title="Vers la page d'accueil">SEF</a></h3>
        <input type="checkbox" class="input menu-btn nav_hidden" id="menu-btn">
        <label class="menu-icon nav_hidden" for="menu-btn">
            <span class="navicon"></span>
        </label>
        <div class="navigation__container">
            <ul class="navigation__container__list">
                <?php if (have_rows('nav-list', 'options')):
                    while (have_rows('nav-list', 'options')):the_row();
                        $name = get_sub_field('nav-name-link');
                        $link = get_sub_field('nav-link');
                        ?>
                    <li>
                        <a href="<?= $link ?>"><?= $name ?></a>
                    </li>
                    <?php endwhile;endif; ?>
            </ul>
            <ul class="navigation__container__button">
                <li>
                    <a class="navigation__container__button__don" href="<?= get_field('soutiens-button', 'option'); ?>"><?= get_field('soutiens-button-name', 'option'); ?></a>
                </li>
                <li>
                    <a class="navigation__container__button__shop" href="<?= get_field('magasin-button', 'option'); ?>"><?= get_field('magasin-button-name', 'option'); ?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
