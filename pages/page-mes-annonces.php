<?php
/*
Template Name: Mes Annonces
*/
get_header();
?>

<section class="my-annonces">
  <div class="container_my_annonce">

    <!-- HEADER -->
    <div class="header_my_annonce">
      <h1>Mes Annonces</h1>
      <a href="<?php echo site_url('/post-announcement'); ?>" class="btn-primary_annc">
        + Nouvelle Annonce
      </a>
    </div>

    <!-- LISTE VIDE -->
    <div class="empty-state" id="emptyState">
      <div class="icon">+</div>
      <h3>Aucune annonce</h3>
      <p>Vous n'avez pas encore publié d'annonce</p>
      <a href="<?php echo site_url('/post-announcement'); ?>" class="btn-primary_my_annonce">
        Créer ma première annonce
      </a>
    </div>

    <!-- GRID ANNONCES -->
    <div class="annonces-grid" id="annoncesGrid">

      <!-- CARD 1 -->
      <div class="annonce-card">
        <div class="no-image">Pas d'image</div>

        <div class="content">
          <div class="top">
            <span class="category">Bricolage</span>
            <span class="badge pending">En attente</span>
          </div>

          <h3>Perceuse électrique à louer</h3>

          <p>Perceuse puissante disponible pour vos travaux...</p>

          <div class="actions">
            <a href="<?php echo site_url('/annoucements-detail'); ?>" class="btn-light">Voir</a>
            <button class="icon-btn edit">✏️</button>
            <button class="icon-btn delete">🗑️</button>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="annonce-card">
        <div class="no-image">Pas d'image</div>

        <div class="content">
          <div class="top">
            <span class="category">Cuisine</span>
            <span class="badge approved">Approuvée</span>
          </div>

          <h3>Mixeur disponible</h3>
          <p>Mixeur en bon état pour vos préparations...</p>

          <div class="actions">
            <a href="<?php echo site_url('/annoucements-detail'); ?>" class="btn-light">Voir</a>
            <button class="icon-btn edit">✏️</button>
            <button class="icon-btn delete">🗑️</button>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>

<script>
document.querySelectorAll('.delete').forEach(btn => {
  btn.addEventListener('click', () => {
    if(confirm("Supprimer cette annonce ?")) {
      btn.closest('.annonce-card').remove();
    }
  });
});
</script>