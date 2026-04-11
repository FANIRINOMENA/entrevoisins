<?php
/*
Template Name: Détail Annonce
*/
get_header();
?>

<section class="annonce-detail">
  <div class="container-annonce-detail">

    <!-- RETOUR -->
    <a href="<?php echo site_url('/announcements'); ?>" class="back-link">← Retour aux annonces</a>

    <div class="card">

      <!-- SLIDER -->
      <div class="slider">
        <img id="mainImage" src="https://via.placeholder.com/800x400" alt="image">

        <button class="nav prev">‹</button>
        <button class="nav next">›</button>

        <div class="dots" id="dots"></div>
      </div>

      <!-- CONTENT -->
      <div class="content">

        <div class="header-annonce-detail">
          <div>
            <span class="category">Bricolage</span>
            <h1>Perceuse électrique à louer</h1>
            <p class="date">Publié le 10 avril 2026</p>
          </div>

          <div class="actions">
            <button class="btn-icon">✏️</button>
            <button class="btn-icon delete">🗑️</button>
          </div>
        </div>

        <div class="description">
          <h2>Description</h2>
          <p>
            Perceuse puissante disponible pour tous vos travaux de bricolage.
            Facile à utiliser, très bon état.
          </p>
        </div>

        <div class="status pending">
          Cette annonce est en attente de modération
        </div>

        <div class="contact">
          <a href="<?php echo site_url('/contact'); ?>" class="btn-primary">
            Contacter le propriétaire
          </a>
        </div>

      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>

<script>
const images = [
  "https://via.placeholder.com/800x400",
  "https://via.placeholder.com/800x400/ff0000",
  "https://via.placeholder.com/800x400/00ff00"
];

let current = 0;
const mainImage = document.getElementById("mainImage");
const dotsContainer = document.getElementById("dots");

function renderDots() {
  dotsContainer.innerHTML = "";
  images.forEach((_, i) => {
    const dot = document.createElement("span");
    if(i === current) dot.classList.add("active");
    dot.onclick = () => {
      current = i;
      update();
    };
    dotsContainer.appendChild(dot);
  });
}

function update() {
  mainImage.src = images[current];
  renderDots();
}

document.querySelector(".next").onclick = () => {
  current = (current + 1) % images.length;
  update();
};

document.querySelector(".prev").onclick = () => {
  current = (current - 1 + images.length) % images.length;
  update();
};

update();
</script>