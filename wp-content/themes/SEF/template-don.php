<?php /* Template Name: don page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section id="don" class="don">
    <div class="landing-illustration">
        <h2><?= get_field('landing-title')?></h2>
        <img src="<?= get_field('landing-illustration')?>" alt="">
    </div>
</section>
    <section id="option-don" class="option-don">
                <?php if (have_rows('option-don')) :
                    while (have_rows('option-don')) :the_row();
                        $text = get_sub_field('text');
                        $title = get_sub_field('title');
                        $link = get_sub_field('link');
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $description = get_sub_field('description');
                        ?>
                    <article class="option-don__container">
                        <div class="option-don__container__left">
                            <h3><?= $title?></h3>
                            <p><?= $text?></p>
                            <p><?= $description?></p>
                            <a class="button" href="<?= $link?>"><?= $name?></a>
                        </div>
                        <div class="option-don__container__right">
                            <img src="<?= $image?>" alt="">
                        </div>
                    </article>
                    <?php endwhile;
                endif; ?>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php