<?php
/*
Template Name: Déposer une annonce
*/
get_header();
?>

<section class="post-annonce">
  <div class="container_depose_annonce">

    <div class="header_depose_annonce">
      <h1>Déposer une Annonce</h1>
      <p>
        Partagez votre matériel avec la communauté. Votre annonce sera vérifiée avant publication.
      </p>
    </div>

    <form class="annonce-form">

      <div class="form-group">
        <label>Titre *</label>
        <input type="text" placeholder="Ex: Perceuse électrique à louer" required>
      </div>

      <div class="form-group">
        <label>Catégorie *</label>
        <select required>
          <option value="">Sélectionnez une catégorie</option>
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

      <div class="form-group">
        <label>Description *</label>
        <textarea rows="6" placeholder="Décrivez votre annonce..." required></textarea>
      </div>

      <div class="form-group">
        <label>Images (max 5)</label>

        <div class="upload-box">
          <input type="file" id="images" multiple accept="image/*">
          <label for="images" class="upload-btn">Choisir des images</label>
          <p id="image-count">0/5 images</p>
        </div>

        <div id="preview-container" class="preview-grid"></div>
      </div>

      <div class="buttons">
        <button type="submit" class="btn-primary">Publier l'annonce</button>
        <button type="button" class="btn-secondary">Annuler</button>
      </div>

    </form>

  </div>
</section>

<?php get_footer(); ?>

<script>
const input = document.getElementById('images');
const previewContainer = document.getElementById('preview-container');
const imageCount = document.getElementById('image-count');

let images = [];

input.addEventListener('change', function() {
  const files = Array.from(this.files);

  if (images.length + files.length > 5) {
    alert("Maximum 5 images");
    return;
  }

  files.forEach(file => {
    images.push(file);

    const reader = new FileReader();
    reader.onload = function(e) {
      const img = document.createElement('img');
      img.src = e.target.result;
      previewContainer.appendChild(img);
    };
    reader.readAsDataURL(file);
  });

  imageCount.innerText = images.length + "/5 images";
});
</script>