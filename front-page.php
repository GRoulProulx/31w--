<?php
  // Récupérer les données du Customizer
  $hero_title = get_theme_mod('hero_title', 'Bienvenue sur mon site');
  $hero_subtitle = get_theme_mod('hero_subtitle', 'Your success starts here.');
  $hero_background = get_theme_mod('hero_background', '');
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Learn More');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#'); ?>
  <section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
    <div class="hero__contenu">
      <h1><?php echo esc_html($hero_title); ?></h1>
      <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
        <a href="<?php echo esc_url($hero_cta_link); ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>

<!-- /**
 * index.php - Le modèle par défaut de wordpress
 */ -->
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Liste de vos cours - </h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <?php
          $chaine = get_the_title();
          $sigle = substr($chaine, 0, 7);
          $titre = substr($chaine, 8, strrpos($chaine, "(") - 8);
          $duree = '60h';
          ?>
          <article class="principal__article">
            <h5><?php echo $sigle ?></h5>
            <h6><?php echo $titre ?></h6>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
            <code><?php echo $duree; ?></code>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>

