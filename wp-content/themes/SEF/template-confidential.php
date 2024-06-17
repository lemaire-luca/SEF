<?php /* Template Name: confidential page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<h2>Politique de confidentialité </h2>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php
