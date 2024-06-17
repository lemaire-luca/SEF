<section id="actuality" class="actuality">
    <h2>Quelques actualités</h2>
    <div class="actuality__container">
    <?php if (have_rows('actuality-list', 'option')) :
        while (have_rows('actuality-list', 'option')) : the_row();
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
            $text = get_sub_field('text');
            $span = get_sub_field('span');
            ?>
                <a href="<?= $link ?>">
                    <article class="actuality__container__article">
                        <img src="<?= $image ?>" alt="" width="396.66" height="290">
                        <div class="actuality__container__article__infos">
                            <span><?= $span ?></span>
                            <h3><?= $title ?></h3>
                            <p><?= $text ?></p>
                        </div>
                    </article>
                </a>
        <?php endwhile;
    endif;
    ?>
    </div>
    <a class="button" href="<?= get_field('actuality-page-link', 'option')?>"><?= get_field('actuality-page-name', 'option')?></a>
</section>
