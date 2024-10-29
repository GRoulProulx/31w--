<footer class="pied">
    <section class="global pied__global">
        <p>
            Auteur : Guillaume Rouleau Proulx <br>
            lien github : https://github.com/GRoulProulx/31w--
        <div class="footer__text">
            Petit resumé de l'exercice : Peaufinez le front-end de mon premier site sur Wordpress.<br>
            Donc, j'ai modifié les couleurs à mon goût, j'ai aussi amiliorer l'enlignement de mes cartes.<br>
            Un ajout de quelques elements comme une barre de recherche dans le footer et un ajout d'une image temporaire.
            
        </div>
        </p>
        <div class="pied__img">
            <img class="logo" src="logo.png" alt="">
           <?php get_search_form(); ?>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>