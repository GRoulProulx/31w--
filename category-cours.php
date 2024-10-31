<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
    <section class="global">
        <h2>Liste de cours - 3,2,1 colonnes</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) :  the_post(); ?>

                    <?php
                    $chaine = get_the_title();
                    $sigle = substr($chaine, 0, 7);
                    $position_parenthese = strpos($chaine, "(");
                    $titre = substr($chaine, $position_parenthese -7);
                    $duree = substr($chaine, $position_parenthese);
                    ?>

                    <article class="principal__article">
                        <h5><?php the_title() ?></h5>
                        <p><?php the_content() ?></p>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>