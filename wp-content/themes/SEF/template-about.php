<?php /* Template Name: about page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section id="landing-page" class="landing-page">
        <div class="landing-illustration">
            <h2><?= get_field('landing-title')?></h2>
            <img src="<?= get_field('landing-illustration')?>" alt="">
        </div>
    </section>
    <section id="services" class="services">
        <div class="services__infos">
            <h2>Nos services</h2>
            <p>L’objectif de l’asbl :

                L'insertion ou la réinsertion sociale d'adultes et de familles en difficulté
                Le temps passé au SEF doit être mis à profit par chacun pour règler
                ses questions administratives, repenser sa façon de vivre avec les
                autres et préparer son départ. Afin, si possible, de ne pas revenir...
            </p>
        </div>
        <div class="services__article">
                <?php if (have_rows('service-infos')) :
                    while (have_rows('service-infos')) :the_row();
                        $text = get_sub_field('text');
                        $title = get_sub_field('title');
                        ?>
                    <article>
                        <h3><?= $title?></h3>
                        <p><?= $text?></p>
                    </article>
                    <?php endwhile;
                endif; ?>
        </div>
    </section>
    <section id="mission" class="mission">
        <div class="mission__left">
            <h2>Notre mission</h2>
            <p>
                Le SEF a pour mission de fournir un soutien essentiel aux personnes en situation précaire. Nous nous
                engageons à offrir des solutions de logement sûres et abordables, tout en favorisant l'inclusion sociale et
                l'autonomie des bénéficiaires. En collaboration avec divers partenaires et à travers des programmes
                d'accompagnement personnalisés, le SEF œuvre pour améliorer les conditions de vie, prévenir l'exclusion
                sociale et permettre à chacun de retrouver une stabilité et une dignité. Notre action s'inscrit dans une
                démarche solidaire et humaine, visant à renforcer la cohésion sociale et à lutter contre la précarité.
            </p>
        </div>
        <div class="mission__right">
            <img src="<?= get_field('mission-img')?>" alt="" width="632" height="421">
        </div>
    </section>
    <section id="history" class="history">
        <div class="history__left">
            <img src="<?= get_field('history-img')?>" alt="" width="632" height="422">
        </div>
        <div class="history__right">
            <?php if (have_rows('history')) :
                while (have_rows('history')) :the_row();
                    $text = get_sub_field('text');
                    ?>
                    <h2>Notre histoire</h2>
                    <p><?= $text ?></p>
                <?php endwhile;
            endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php