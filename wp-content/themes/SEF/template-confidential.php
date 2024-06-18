<?php /* Template Name: confidential page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section id="confidential" class="confidential">
    <div class="confidential__title">
        <h2>Politique de confidentialité </h2>
        <p>Dernière mise à jour le : <span><?= get_field('confidential-update')?></span></p>
    </div>
    <div class="confidential__container">
        <?php if (have_rows('confidential-list')) :
            while (have_rows('confidential-list')) :the_row();
                $text = get_sub_field('text');
                $title = get_sub_field('title');
                ?>
            <div class="confidential__container__infos">
                <h3><?= $title?></h3>
                <p><?= $text?></p>
            </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php
