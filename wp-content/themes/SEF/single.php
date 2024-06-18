<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section id="single" class="single">
    <div class="landing-illustration">
        <h2 role="heading" aria-level="2"><?= get_field('landing-title')?></h2>
        <img src="<?= get_field('landing-illustration')?>" alt="">
    </div>
    <div class="single__infos">
        <hgroup>
            <h3 role="heading" aria-level="3"><?= get_field('single-title')?></h3>
            <p><?= get_field('single-span')?></p>
        </hgroup>
        <?php if (have_rows('single-content')) :
            while (have_rows('single-content')) :the_row();
                $text = get_sub_field('text');
                ?>
                <p><?= $text ?></p>
            <?php endwhile;
        endif; ?>
    </div>
    <?= get_template_part('components/more-actuality')?>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php