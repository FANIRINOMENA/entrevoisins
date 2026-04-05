<?php if (!defined('ABSPATH')) exit; ?>

<footer class="custom-footer">

  <div class="footer-container">

    <!-- NEWSLETTER -->
    <div class="footer-newsletter">
      <h3>Recevez notre newsletter</h3>
      <form method="post" action="#">
        <input type="email" placeholder="Votre email" required>
        <button type="submit">OK</button>
      </form>
    </div>

    <!-- COLONNES -->
    <div class="footer-columns">

      <!-- MENU 1 -->
      <div class="footer-col">
        <h4>Navigation</h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer_1',
          'container' => false,
        ));
        ?>
      </div>

      <!-- MENU 2 -->
      <div class="footer-col">
        <h4>Informations</h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer_2',
          'container' => false,
        ));
        ?>
      </div>

      <!-- CONTACT -->
      <div class="footer-col">
        <h4>Contact</h4>
        <p>Email : contact@entrevoisins.com</p>
        <p>Tél : +261 XX XX XXX XX</p>
      </div>

    </div>

  </div>

  <!-- COPYRIGHT -->
  <div class="footer-bottom">
    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – Tous droits réservés
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>