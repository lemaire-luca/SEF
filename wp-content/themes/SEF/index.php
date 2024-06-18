<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main role="main">
        <section id="landing" class="landing">
            <h1 role="heading" aria-level="1">Service d'entraide familiale</h1>
            <img src="<?= get_field('landing-img'); ?>" alt="">
            <a class="button-white" href="#help">Un nouveau départ</a>
        </section>
        <section id="help" class="help">
            <div class="help__left">
                <img src="<?= get_field('help-img'); ?>" alt="" width="646" height="431">
            </div>
            <div class="help__right">
                <h2 role="heading" aria-level="2">Les différentes formes d'aide offertes par le <abbr
                            title="Service d'entraide familiale">SEF</abbr></h2>
                <p>
                    Le Service d'Assistance Familiale de Huy (<abbr title="Service d'entraide familiale">SEF</abbr>)
                    offre une variété d'aides
                    précieuses aux individus et aux familles en difficulté. Parmi les services
                    proposés, on retrouve notamment des colis alimentaires et un soutien social.
                </p>
                <a class="button" href="<?= get_field('service') ?>">En savoir plus</a>
            </div>
        </section>
        <section id="information" class="information">
            <h2 role="heading" aria-level="2">Service d'Entraide Familiale</h2>
            <p>
                Le Service d'Entraide Familiale (<abbr title="Service d'entraide familiale">SEF</abbr>) de Huy a été
                fondé il y a
                plusieurs années avec pour mission principale d'apporter un soutien
                précieux aux familles et aux personnes dans le besoin. Nous croyons en
                la solidarité et en l'importance d'aider nos concitoyens à surmonter les
                difficultés temporaires ou durables auxquelles ils peuvent être confrontés.
            </p>
        </section>
        <?php get_template_part('components/more-actuality'); ?>
        <?php get_template_part('components/faq'); ?>
        <?php get_template_part('components/more-infos'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>