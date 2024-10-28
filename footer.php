<footer class="pied">
    <section class="global pied__global">
        <div>
            Auteur : Guillaume Rouleau Proulx
            lien github : https://github.com/GRoulProulx/31w--
        </div>
        <div>
            Petit resumé de l'exercice : Peaufinez le front-end de mon premier site sur Wordpress.
            Un ajout de quelques elements comme un barre de recherche dans le footer, un ajout d'une image.
            <img src="" alt="">
        </div>
        <div>
           <?php get_search_form(); ?>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>