
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
  <section class="global">
    <h2>Liste de destinations - front</h2>
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
