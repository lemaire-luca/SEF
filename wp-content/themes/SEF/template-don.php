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
        <div class="option-don__container">
            <article class="option-don__container__article">
                <div class="option-don__container__article__left">
                    <h3>Don monétaire</h3>
                    <p>
                        Pour faire un don par virement bancaire, veuillez utiliser les
                        informations de compte suivantes :
                    </p>
                    <a class="button" href="">Faire un don</a>
                </div>
                <div class="option-don__container__article__right">
                    <img src="img/don-monétaire.png" alt="" width="611" height="423">
                </div>
            </article>
            <article class="option-don__container__article">
                <div class="option-don__container__article__left">
                    <h3>Don matériel</h3>
                    <p>
                        Pour faire un don matériel, vous pouvez vous rendre au Dépôt de Huy.
                    </p>
                    <a class="button" href="">Faire un don</a>
                </div>
                <div class="option-don__container__article__right">
                    <img src="img/don-matériel.png" alt="" width="611" height="423">
                </div>
            </article>
            <article class="option-don__container__article">
                <div class="option-don__container__article__left">
                    <h3>Leg</h3>
                    <p>
                        Pour faire un leg, veuillez vous rendre dans le formulaire de contact
                        afin de nous communiquez votre intérêt  :
                    </p>
                    <p>
                        Qu’est-ce que le leg: le leg est une disposition testamentaire
                        où une personne, appelée le testateur, désigne un bénéficiaire,
                        appelé le légataire, pour recevoir un bien spécifique ou une somme
                        d'argent après son décès.
                    </p>
                    <a class="button" href="">Faire un don</a>
                </div>
                <div class="option-don__container__article__right">
                    <img src="img/leg.png" alt="" width="611" height="423">
                </div>
            </article>
            <article class="option-don__container__article">
                <div class="option-don__container__article__left">
                    <h3>Devenir bénévole</h3>
                    <p>
                        Pour faire devenir bénévole, vous pouvez nous contactez pour plus de renseignement.
                    </p>
                    <a class="button" href="">Nous rejoindre</a>
                </div>
                <div class="option-don__container__article__right">
                    <img src="img/bénévolat.png" alt="" width="611" height="423">
                </div>
            </article>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php