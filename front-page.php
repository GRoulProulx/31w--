<?php get_header() ?>

<!-- /**
 * index.php - Le modèle par défaut de wordpress
 */ -->


<?php get_header() ?>

<main class="principal">
  <?php
  // Récupérer les données du Customizer
  $hero_title = get_theme_mod('hero_title', 'Bienvenue sur mon site');
  $hero_subtitle = get_theme_mod('hero_subtitle', 'Your success starts here.');
  $hero_background = get_theme_mod('hero_background', '');
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Learn More');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#'); ?>
  <section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
    <div class="hero__contenu">
      <h1 class="hero__contenu__h1"><?php echo esc_html($hero_title); ?></h1>
      <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
        <a href="<?php echo esc_url($hero_cta_link); ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>
  <?php
  $args = array(
    'name' => 'carrousel',
    'post_type' => 'post',
    'posts_per_page' => 1
  );

  $carousel_query = new WP_Query($args);

  if ($carousel_query->have_posts()) :
    while ($carousel_query->have_posts()) : $carousel_query->the_post();
      the_content();
    endwhile;
  endif;
  wp_reset_postdata();
  ?>
  <section id="favorite-destinations">
    <h2>Destinations Favorites</h2>
    <div class="destination-blocks">
      <?php

      $destinations = new WP_Query(array(
        'category_name' => 'favorit',
        'posts_per_page' => 6
      ));


      while ($destinations->have_posts()) : $destinations->the_post();
      ?>
        <div class="destination-block">
          <div class="destination-image">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            }
            ?>
          </div>

          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">En savoir plus</a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
  </section>
 
  <h2>Liste de destinations</h2>
  <div class="principal__conteneur">
    <?php if (have_posts()): ?>
      <?php while (have_posts()) :  the_post(); ?>
        <article class="principal__article">
          <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
        </article>
      <?php endwhile; ?>

  </div>
<?php endif ?>
</section>
</main>
<?php get_footer() ?>