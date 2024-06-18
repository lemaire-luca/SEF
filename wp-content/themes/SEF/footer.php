<section id="bottom" class="bottom">
    <div class="bottom__navigation">
        <nav role="navigation">
            <ul class="bottom__navigation__list">
                <?php if (have_rows('nav-list', 'options')) :
                    while (have_rows('nav-list', 'options')) :the_row();
                        $name = get_sub_field('nav-name-link');
                        $link = get_sub_field('nav-link');
                        ?>
                        <li>
                            <a href="<?= $link ?>"><?= $name ?></a>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
        </nav>
        <div itemscope itemtype="https://schema.org/Organization" class="bottom__navigation__infos">
            <h3 role="heading" aria-level="3">Service d'Entraide Familiale <abbr title=" association sans but lucratif">asbl</abbr>
            </h3>
            <ul>
                <li itemprop="streetAddress">Rue du Marché 33, 4500 HUY</li>
                <li itemprop="telephone">085 / 21 57 52</li>
                <li itemprop="email">contact@sefasbl.com</li>
            </ul>
            <div class="bottom__navigation__infos__code">
                <p>
                    <span class="bold">CCP : </span>
                    BE34 0000 2750 8590
                </p>
                <p>
                    <span class="bold">BNP : </span>
                    BE43 2400 2934 2201
                </p>
            </div>
        </div>
        <div class="bottom_navigation__follow">
            <p>Nous suivre</p>
        </div>
    </div>
    <div class="bottom__information">
        <p>© 2024 Service d'entraide familiale Huy. Tous droits réservés.</p>
        <a href="<?= get_field('confidential', 'option') ?>">Politique de confidentialité</a>
    </div>
</section>