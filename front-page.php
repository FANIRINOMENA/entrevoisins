<?php
/*
Template Name: Home Entrevoisins
*/
get_header();
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="badge">
      Nouveau à <?php bloginfo('name'); ?>
    </div>

    <h1>
      <?php echo function_exists('get_field') && get_field('titre_hero') 
        ? get_field('titre_hero') 
        : 'Accueil et partage !'; ?>
    </h1>

    <h2>
      <?php echo function_exists('get_field') && get_field('sous_titre_hero') 
        ? get_field('sous_titre_hero') 
        : "L'art de vivre entre voisins"; ?>
    </h2>

    <p>
      <?php 
        echo function_exists('get_field') && get_field('description_hero') 
          ? get_field('description_hero') 
          : "Bienvenue sur Entrevoisins, la plateforme qui connecte les habitants d'Abidjan pour partager, louer et emprunter du matériel entre voisins. Que vous ayez besoin d'outils de bricolage, d'équipement de cuisine, ou de matériel de transport, trouvez tout ce dont vous avez besoin près de chez vous. Ensemble, construisons une communauté solidaire et durable.";
      ?>
    </p>

    <div class="hero-btns">
      <a href="#annonces" class="btn-primary">Explorer les Annonces</a>
      <button class="btn-secondary" onclick="openModal()">Déposer une Annonce</button>
    </div>
  </div>
</section>

<!-- CATEGORIES -->
<section class="categories reveal">
  <h2 class="section-title">Parcourir par Catégorie</h2>

  <div class="cat-grid">
    <?php
    $categories = get_terms(array(
      'taxonomy' => 'category',
      'hide_empty' => false
    ));

    if (!empty($categories) && !is_wp_error($categories)) :
      foreach ($categories as $cat) :

        // Image catégorie (ACF ou fallback)
        $image = function_exists('get_field') ? get_field('image_categorie', $cat) : '';
        $image_url = is_array($image) ? $image['url'] : $image;

        if (!$image_url) {
          $image_url = 'https://via.placeholder.com/400x300?text=Image';
        }
    ?>
        <div class="cat-grid">
            <div class="cat-card">
              <img src="<?php echo esc_url($image_url); ?>" alt="">
              <div class="cat-overlay"></div>
              <span class="cat-label"><?php echo esc_html($cat->name); ?></span>
            </div>
            <div class="cat-card">
              <img src="<?php echo esc_url($image_url); ?>" alt="">
              <div class="cat-overlay"></div>
              <span class="cat-label"><?php echo esc_html($cat->name); ?></span>
            </div>
            <div class="cat-card">
              <img src="<?php echo esc_url($image_url); ?>" alt="">
              <div class="cat-overlay"></div>
              <span class="cat-label"><?php echo esc_html($cat->name); ?></span>
            </div>
        </div>
    <?php
      endforeach;
    else :
      echo '<p style="text-align:center;">Aucune catégorie trouvée</p>';
    endif;
    ?>
  </div>
</section>

<!-- BANNER -->
<section class="banner reveal">
  <div class="banner-box">
    Découvrez toutes les offres sur les communes de Yopougon, Marcory, Cocody…
  </div>
</section>

<!-- EMPTY -->
<section class="empty-state">
  <h3>Aujourd'hui, vous n'avez pas trouvé ce que vous recherchez</h3>
  <p>N'hésitez pas à laisser une annonce de recherche</p>
  <a class="btn-link" onclick="openModal()">Déposez votre demande →</a>
</section>

<!-- MODAL LOGIN -->
<div class="modal-overlay" id="modal" onclick="handleOverlayClick(event)">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">×</button>
    <h2>Bienvenue</h2>
    <p class="subtitle">Connectez-vous à votre compte</p>
    <div class="form-group">
      <label>Email</label>
      <input type="email" placeholder="votre@email.com">
    </div>
    <div class="form-group">
      <label>Mot de passe</label>
      <input type="password" placeholder="••••••••">
    </div>
    <button class="btn-submit" onclick="handleLogin()">Se connecter</button>
    <div class="modal-footer">Pas encore de compte ? <a onclick="closeModal()">Créer un compte</a></div>
  </div>
</div>

<footer>© 2026 Entrevoisins – La communauté solidaire d'Abidjan</footer>

<script>
function openModal() {
  const modal = document.getElementById('modal');
  if (modal) {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal() {
  const modal = document.getElementById('modal');
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }
}

// CLICK OUTSIDE
document.addEventListener("click", function(e) {
  const modal = document.getElementById('modal');
  if (modal && e.target === modal) {
    closeModal();
  }
});

// LOGIN FAKE
function handleLogin() {
  const btn = document.querySelector('.btn-submit');
  if (!btn) return;

  btn.textContent = 'Connexion...';

  setTimeout(() => {
    btn.textContent = '✓ Connecté!';
    btn.style.background = '#22c55e';

    setTimeout(() => {
      closeModal();
      btn.textContent = 'Se connecter';
      btn.style.background = '';
    }, 1000);
  }, 1200);
}

// SCROLL ANIMATION
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
});

document.querySelectorAll('.reveal').forEach(el => {
  observer.observe(el);
});
</script>