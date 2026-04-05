<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- NAV -->
<nav class="custom-navbar">
  <!-- LOGO -->
  <div class="logo">
    <a href="<?php echo home_url(); ?>">
      <?php 
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        bloginfo('name');
      }
      ?>
    </a>
  </div>

  <!-- MENU -->
  <div class="nav-links">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'menu'
      ));
    ?>

    <!-- BTN LOGIN -->
    <?php if (!is_user_logged_in()) : ?>
      <button class="btn-connect" onclick="openModal()">→ Se connecter</button>
    <?php else : ?>
      <a href="<?php echo wp_logout_url(); ?>" class="btn-connect">Déconnexion</a>
    <?php endif; ?>
  </div>
</nav>

<script>
function toggleMenu() {
  document.querySelector('.nav-links').classList.toggle('active');
}
</script>