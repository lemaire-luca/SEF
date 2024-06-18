<?php /* Template Name: house page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section id="landing-page" class="landing-page">
        <div class="landing-illustration">
            <h2 role="heading" aria-level="2"><?= get_field('landing-title')?></h2>
            <img src="<?= get_field('landing-illustration')?>" alt="">
        </div>
    </section>
    <section id="home" class="home">
            <?php if (have_rows('house-infos')) :
                while (have_rows('house-infos')) :the_row();
                    $text = get_sub_field('text');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    ?>
        <div class="home__first">
                <article class="home__first__infos">
                    <h2 role="heading" aria-level="2"><?= $title ?></h2>
                    <p><?= $text ?></p>
                    <a class="button" href="<?= $link ?>"><?= $name?></a>
                </article>
                <div class="home__first__img">
                    <img src="<?= $image ?>" alt="">
                </div>
        </div>
                <?php endwhile;
            endif; ?>
    </section>
    <?php get_template_part('components/faq'); ?>
    <?php get_template_part('components/more-infos'); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php