<footer class="pied">
    <section class="global pied__global">
        <div>
            Auteur : Guillaume Rouleau Proulx
            lien github : https://github.com/GRoulProulx/31w--
        </div>
        <div>
            Petit resumé de l'exercice : Peaufinez le front-end de mon premier site sur Wordpress.
            Donc, j'ai modifié les couleurs à mon goût, j'ai aussi amiliorer l'enlignement de mes cartes.
            Un ajout de quelques elements comme un barre de recherche dans le footer et un ajout d'une image temporaire.
            <img class="logo" src="/assets/img/GuillaumeProulxLOGO1.png" alt="logo">
        </div>
        <div>
           <?php get_search_form(); ?>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>