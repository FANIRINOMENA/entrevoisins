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
        Entrevoisins
    </a>
  </div>

  <!-- MENU -->
  <div class="nav-links">
    <a href="#"><svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Chat en direct</a>
    <a href="#"><svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Admin Login</a>
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