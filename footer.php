<footer class="custom-footer">

  <div class="footer-container">

    <div class="footer-grid">

      <!-- LOGO + DESCRIPTION -->
      <div class="footer-col">
        <h2 class="logo">Entrevoisins</h2>
        <p>
          La plateforme de partage et d'entraide entre voisins à Abidjan.
          Louez, empruntez, partagez en toute confiance.
        </p>
      </div>

      <!-- ABOUT -->
      <div class="footer-col">
        <h3>À propos</h3>
        <ul>
          <li><a href="<?php echo site_url('/about'); ?>">Notre histoire</a></li>
          <li><a href="<?php echo site_url('/about'); ?>">Comment ça marche</a></li>
          <li><a href="<?php echo site_url('/about'); ?>">Tarifs & Offres</a></li>
          <li><a href="<?php echo site_url('/shop'); ?>">Boutique</a></li>
        </ul>
      </div>

      <!-- SUPPORT -->
      <div class="footer-col">
        <h3>Support</h3>
        <ul>
          <li><a href="<?php echo site_url('/contact'); ?>">Contactez-nous</a></li>
          <li><a href="<?php echo site_url('/contact'); ?>">Centre d'aide / FAQ</a></li>
        </ul>
      </div>

      <!-- LEGAL -->
      <div class="footer-col">
        <h3>Légal</h3>
        <ul>
          <li><a href="<?php echo site_url('/terms'); ?>">Conditions d'Utilisation</a></li>
          <li><a href="<?php echo site_url('/privacy'); ?>">Politique de Confidentialité</a></li>
        </ul>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">

      <p>© <?php echo date('Y'); ?> Entrevoisins. Tous droits réservés.</p>

      <p>Fait avec ❤ par l'équipe Entrevoisins</p>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>