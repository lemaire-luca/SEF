<?php /* Template Name: actuality page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section id="landing-page" class="landing-page">
        <div class="landing-illustration">
            <h2 role="heading" aria-level="2"><?= get_field('landing-title')?></h2>
            <img src="<?= get_field('landing-illustration')?>" alt="">
        </div>
    </section>
<section id="actuality-page" class="actuality-page">
    <?php if (have_rows('actuality-page')) :
        while (have_rows('actuality-page')) :the_row();
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
            ?>
            <div class="actuality-page__container">
                <a href="<?= $link ?>">
                    <img src="<?= $image ?>" alt="">
                    <div class="actuality-page__container__infos">
                        <h2 role="heading" aria-level="2"><?= $title ?></h2>
                    </div>
                </a>
            </div>
        <?php endwhile;
    endif; ?>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php
