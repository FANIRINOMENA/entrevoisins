<?php
/*
Template Name: Modifier Annonce
*/
get_header();
?>

<section class="edit-annonce">
  <div class="container">

    <!-- HEADER -->
    <div class="header">
      <h1>Modifier l'Annonce</h1>
      <p>Mettez à jour les informations de votre annonce</p>
    </div>

    <!-- FORM -->
    <form class="annonce-form">

      <!-- TITRE -->
      <div class="form-group">
        <label>Titre *</label>
        <input type="text" value="Perceuse électrique à louer">
      </div>

      <!-- CATEGORIE -->
      <div class="form-group">
        <label>Catégorie *</label>
        <select>
          <option>Bricolage & Travaux</option>
          <option>Tout pour la Cuisine</option>
          <option>Culture Loisirs & Sport</option>
          <option>Transport & Véhicules</option>
          <option>Matériel Électrique</option>
          <option>Manutention & Stockage</option>
          <option>Presta-Services RH</option>
          <option>Se Loger - Immobilier</option>
          <option>Matériel Agricole</option>
          <option>Dons & prêts</option>
        </select>
      </div>

      <!-- DESCRIPTION -->
      <div class="form-group">
        <label>Description *</label>
        <textarea rows="6">Perceuse en bon état, disponible immédiatement...</textarea>
      </div>

      <!-- IMAGES -->
      <div class="form-group">
        <label>Images (max 5)</label>

        <div class="upload-box">
          <input type="file" id="images" multiple>
          <label for="images" class="upload-btn">Choisir des images</label>
          <p id="image-count">1/5 images</p>
        </div>

        <div class="preview-grid" id="preview">
          <div class="img-box">
            <img src="https://via.placeholder.com/150">
            <button type="button" class="remove">✕</button>
          </div>
        </div>
      </div>

      <!-- BUTTONS -->
      <div class="buttons">
        <button class="btn-primary">Mettre à jour</button>
        <a href="/mes-annonces" class="btn-secondary">Annuler</a>
      </div>

    </form>

  </div>
</section>

<?php get_footer(); ?>

<script>
const input = document.getElementById("images");
const preview = document.getElementById("preview");
const count = document.getElementById("image-count");

let images = 1;

input.addEventListener("change", function() {
  const files = Array.from(this.files);

  files.forEach(file => {
    if(images >= 5) return;

    const reader = new FileReader();
    reader.onload = function(e) {
      const box = document.createElement("div");
      box.classList.add("img-box");

      box.innerHTML = `
        <img src="${e.target.result}">
        <button class="remove">✕</button>
      `;

      box.querySelector(".remove").onclick = () => {
        box.remove();
        images--;
        count.innerText = images + "/5 images";
      };

      preview.appendChild(box);
      images++;
      count.innerText = images + "/5 images";
    };

    reader.readAsDataURL(file);
  });
});
</script>