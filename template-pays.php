<?php
/*
Template Name: Pays
*/

get_header();
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h5><?php the_title(); ?></h5>
            <p><?php the_content(); ?></p>
             <p>Voyageurs: 3 <?php the_field('NombreVoyageurs'); ?></p>
            <p>Date de depart: 2024-12-23 <?php the_field('Date_depart'); ?></p>
            <p>Date de retour: 2025-1-21 <?php the_field('Date_retour'); ?></p>
            <p>Découvrez les plus belles destinations à travers le monde, classées par pays. Nous avons soigneusement sélectionné les pays les plus populaires pour vous offrir une expérience unique et inoubliable.
            </p>
            <?php echo do_shortcode('[carrousel]'); ?>
            <?php echo do_shortcode('[extraire_categorie]'); ?>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>