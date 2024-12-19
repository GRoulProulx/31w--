<footer class="pied">
    <section class="global pied__global">
        <p>
            Auteur : Guillaume Rouleau Proulx <br>
        </p>
        <div class="pied__img">
            <a href="https://github.com/GRoulProulx/31w--/tree/EF">Branche EF</a>
            <a href="https://github.com/GRoulProulx/filtre-pays">Depot Filtre-pays</a>
            <?php get_search_form(); ?>
        </div>
    </section>
    <?php if (function_exists('the_custom_logo')) : ?>
        <?php the_custom_logo(); ?>
    <?php else : ?>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>