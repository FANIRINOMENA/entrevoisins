<?php
/*
Template Name: contact
*/
get_header();
?>

<main class="">

<section class="contact-section">
 
  <!-- Top: Contact + Aide rapide -->
  <div class="contact-info">
    <div>
      <h2>Contact</h2>
      <p>COCOBE COLLECTION ANGRÉ, Nouveau Chu Angré, Angré, Abidjan</p>
      <p class="phone">+225 07 67 22 59 13</p>
    </div>
    <div>
      <h2>Aide rapide</h2>
      <p>Vous pouvez demander tout ce que vous voulez savoir sur nos produits ou services par l'intermédiaire de cet e-mail.</p>
      <p class="email">contact@aliwaxcollection.com</p>
    </div>
  </div>
 
  <!-- Form -->
  <div class="contact-form">
    <h2>Envoyer un message</h2>
 
    <div class="form-grid">
      <input type="text" placeholder="Nom et prénom*" />
      <input type="tel" placeholder="N° de téléphone*" />
    </div>
 
    <div class="form-grid">
      <input type="email" placeholder="Mail*" />
      <div class="select-wrapper">
        <select>
          <option>Partenariat et collaboration.</option>
          <option>Support client</option>
          <option>Commande</option>
          <option>Autre</option>
        </select>
      </div>
    </div>
 
    <div class="form-full">
      <textarea placeholder="Message"></textarea>
    </div>
 
    <button class="btn-envoyer">Envoyer</button>
  </div>
 
</section>

</main>

<?php get_footer(); ?>