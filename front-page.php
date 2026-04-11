<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-overlay"></div>

  <div class="container hero-content">
    <div class="hero-grid">

      <div class="hero-text">
        <span class="badge">Nouveau à Abidjan</span>

        <h1>Accueil et partage!</h1>

        <h3>L'Art de vivre à l'ivoirienne</h3>

        <p>
          Bienvenue sur Entrevoisins, la plateforme qui connecte les habitants
          d'Abidjan pour partager, louer et emprunter du matériel entre voisins.
          Trouvez tout ce dont vous avez besoin près de chez vous.
        </p>

        <div class="hero-buttons">
          <a href="<?php echo site_url('/announcements'); ?>" class="btn primary">Explorer les Annonces</a>
          <a href="<?php echo site_url('/post-announcement'); ?>" class="btn white">Déposer une Annonce</a>
        </div>
      </div>

      <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1613232206738-d613b4b0de7d" alt="">
      </div>

    </div>
  </div>
</section>

<!-- CATEGORIES -->
<section class="categories">
  <div class="container">
    <h2>Parcourir par Catégorie</h2>

    <div class="categories-grid">

      <?php
      $categories = [
        ["Bricolage & Travaux", "https://images.unsplash.com/photo-1552638194-6227090ea530"],
        ["Cuisine", "https://images.unsplash.com/photo-1556911220-bff31c812dba"],
        ["Loisirs & Sport", "https://images.unsplash.com/photo-1461896836934-ffe607ba8211"],
        ["Transport", "https://images.unsplash.com/photo-1630352623287-4f1073a671ba"],
        ["Électrique", "https://images.unsplash.com/photo-1621905251918-48416bd8575a"],
        ["Stockage", "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d"],
        ["Services RH", "https://images.unsplash.com/photo-1521737711867-e3b97375f902"],
        ["Immobilier", "https://images.unsplash.com/photo-1636897246834-c134f3e5be44"],
        ["Agricole", "https://images.unsplash.com/photo-1696428123140-045dc15d7b87"],
        ["Dons & prêts", "https://images.unsplash.com/photo-1532629345422-7515f3d16bb6"],
      ];

      foreach ($categories as $cat) : ?>
        <a href="<?php echo site_url('/announcements'); ?>" class="category-card">
          <img src="<?php echo $cat[1]; ?>" alt="">
          <span><?php echo $cat[0]; ?></span>
        </a>
      <?php endforeach; ?>

    </div>

    <div class="promo">
      <p>Découvrez toutes les offres sur Yopougon, Marcory, Cocody...</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="container text-center">
    <h2>Aujourd'hui, vous n'avez pas trouvé ?</h2>
    <p>Laissez une annonce, des loueurs vous contacteront.</p>

    <a href="<?php echo site_url('/post-announcement'); ?>" class="link">
      Déposez votre demande →
    </a>
  </div>
</section>

<?php get_footer(); ?>