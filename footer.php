<footer class="site__footer">
    <!----première rangée de colonne---->
    <div class="site__footer__colonne">
        <section class="footer__article">
            <h2>Ryomen Sukuna</h2>
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="footer__adresse">
            <h2>Collège de Maisonneuve</h2>
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>
        <section class="footer__liens">
            <h2>Liens</h2>
            <?php get_sidebar('footer_colonne_3'); ?>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto ea nobis. Laborum cum voluptas
                quibusdam voluptatibus dolores tempora fugiat iste exercitationem nihil, excepturi dolorem veritatis
                officia perspiciatis quidem harum!</p>
                <?php wp_nav_menu(array(
                "menu" => "externe")) ?>
        </section>
    </div>
    <!----rangée de plusieurs lignes---->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__sociaux">
        <?php get_sidebar('footer_ligne_1'); ?>
        </section>
        <section class="footer__copyright">Copyright © 2022 - Collège de Maisonneuve. Tous droits réservés.</section>
        <section class="footer__auteur">Kyndra Dess</section>
    </div>


    <h2 class="footer__titre">Yes, indeed, I am a Sukuna simp</h2>
    <p class="footer__presentation">Site web réalisé dans le cadre du cours 4W4</p>
    <h3 class="footer__author">Réalisé par Kyndra Dess</h3>
    <?php 

$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
    <div class="footer__recherche"><?php get_search_form(); ?></div>
</footer>

<div class="boite__modale">
    <button class="boite__modale__fermeture">X</button>
    <p class="boite__modale__texte"></p>
</div>
<div class="boite__carrousel">
    <button class="boite__carrousel__fermeture">X</button>
    <section class="boite__carrousel__navigation"></section>
    <section class="boite__carrousel__img"></section>
</div>

<?php wp_footer(); ?>
</body>

</html>