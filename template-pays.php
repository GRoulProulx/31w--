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
            <?php echo do_shortcode('[carrousel]'); ?>
            <?php echo do_shortcode('[extraire_categorie]'); ?>
          </article>
           <?php
              $le_pays = get_field('le_pays');
              $nombre_de_voyageurs = get_field('nombre_de_voyageurs');
            ?>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>