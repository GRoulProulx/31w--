<footer class="pied">
    <section class="global pied__global">
        <div>
            Auteur : Guillaume Rouleau Proulx
            lien github : https://github.com/GRoulProulx/31w--
        </div>
        <div>
            Petit resumé de l'exercice : Peaufinez le front-end de mon premier site sur Wordpress.<br>
            Donc, j'ai modifié les couleurs à mon goût, j'ai aussi amiliorer l'enlignement de mes cartes.<br>
            Un ajout de quelques elements comme une barre de recherche dans le footer et un ajout d'une image temporaire.
            <img class="logo" src="http://placehold.it/350x150" alt="">
        </div>
        <div>
           <?php get_search_form(); ?>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>