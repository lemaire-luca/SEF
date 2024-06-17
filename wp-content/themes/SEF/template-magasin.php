<?php /* Template Name: magasin page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section id="shop" class="shop">
    <div class="landing-illustration">
        <h2><?= get_field('landing-title')?></h2>
        <img src="<?= get_field('landing-illustration')?>" alt="">
    </div>
    <div class="shop__content">
        <?php if (have_rows('magasin-list')) :
            while (have_rows('magasin-list')) :the_row();
                $span = get_sub_field('span');
                $title = get_sub_field('title');
                ?>
                <div class="shop__container">
                    <div class="shop__container__infos">
                        <h3><?= $title ?></h3>
                        <span><?= $span?></span>
                        <div class="shop__container__infos__list">
                            <?php if (have_rows('date-list')) :
                                while (have_rows('date-list')) :the_row();
                                    $text = get_sub_field('text');
                                    ?>
                            <ul class="date-list">
                                <li><?= $text ?></li>
                            </ul>
                                <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
    <?= get_template_part('components/more-actuality')?>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php
