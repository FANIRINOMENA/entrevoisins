<?php
/*
Template Name: Toutes les Annonces
*/
get_header();
?>

<section class="annonces-container">
  <div class="annonces-wrapper">

    <div class="annonces-header">
      <h1>Toutes les Annonces</h1>
      <p>Découvrez ce que vos voisins ont à partager</p>
    </div>

    <!-- FILTRE -->
    <div class="annonces-filter">
      <form method="GET">
        <select name="categorie" onchange="this.form.submit()">
          <option value="">Tous</option>
          <?php
          $categories = [
            'Bricolage & Travaux',
            'Tout pour la Cuisine',
            'Culture Loisirs & Sport',
            'Transport & Véhicules',
            'Matériel Électrique',
            'Manutention & Stockage',
            'Presta-Services RH',
            'Se Loger - Immobilier',
            'Matériel Agricole',
            'Dons & prêts'
          ];

          foreach ($categories as $cat) {
            $selected = (isset($_GET['categorie']) && $_GET['categorie'] === $cat) ? 'selected' : '';
            echo "<option value=\"$cat\" $selected>$cat</option>";
          }
          ?>
        </select>
      </form>
    </div>

    <!-- LOOP -->
    <div class="annonces-grid">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $meta_query = [
        [
          'key' => 'status',
          'value' => 'approved'
        ]
      ];

      if (!empty($_GET['categorie'])) {
        $meta_query[] = [
          'key' => 'category',
          'value' => sanitize_text_field($_GET['categorie'])
        ];
      }

      $args = [
        'post_type' => 'announcement',
        'posts_per_page' => 12,
        'paged' => $paged,
        'meta_query' => $meta_query
      ];

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

        <a href="<?php the_permalink(); ?>" class="annonce-card">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php else : ?>
            <div class="no-image">Pas d'image</div>
          <?php endif; ?>

          <div class="annonce-content">
            <span class="annonce-category">
              <?php echo get_post_meta(get_the_ID(), 'category', true); ?>
            </span>

            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
          </div>
        </a>

      <?php
        endwhile;
      else :
        echo "<p class='no-result'>Aucune annonce trouvée</p>";
      endif;

      wp_reset_postdata();
      ?>
    </div>

    <!-- PAGINATION -->
    <div class="pagination">
      <?php
      echo paginate_links([
        'total' => $query->max_num_pages
      ]);
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>