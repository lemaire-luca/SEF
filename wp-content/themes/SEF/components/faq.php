<div id="FAQ" class="FAQ">
    <div class="FAQ__title">
        <h2 role="heading" aria-level="2"><abbr title="Foire au questions">FAQ</abbr></h2>
        <p>
            Trouver des réponses aux questions posées sur les services
            et le fonctionnement du <abbr title="Service d'entraide familiale">SEF</abbr>.
        </p>
    </div>
    <div class="FAQ__option">
        <?php if (have_rows('FAQ-infos', 'option')) :
            while (have_rows('FAQ-infos', 'option')) :the_row();
                $text = get_sub_field('text');
                $title = get_sub_field('title');
                ?>
                <article role="article">
                    <h3 role="heading" aria-level="2"><?= $title ?></h3>
                    <p><?= $text ?></p>
                </article>
            <?php endwhile;
        endif; ?>
    </div>
</div>