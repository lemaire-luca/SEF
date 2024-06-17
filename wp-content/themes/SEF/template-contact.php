<?php /* Template Name: contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section id="contact" class="contact">
        <div class="contact__information">
            <h2>Contactez-nous</h2>
            <div class="contact__information__link">
                <p>Adresse : Rue du Marché 33 4500 HUY</p>
                <a href="tel:085 / 21 57 52">
                    <p>Telephone : <span class="num">085 / 21 57 52</span></p>
                </a>
                <a href="mailto:contact@sefasbl.com">
                    <p>Email : <span class="mail">contact@sefasbl.com</span></p>
                </a>
            </div>
        </div>
        <?php get_template_part('components/formulaire'); ?>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php