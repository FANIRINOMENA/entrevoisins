<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="custom-header">
  <div class="container">

    <!-- LOGO -->
    <a href="<?php echo home_url(); ?>" class="logo">
      Entrevoisins
    </a>

    <!-- DESKTOP MENU -->
    <nav class="nav-desktop">

      <button class="chat-btn" onclick="openChat()">
        💬 Chat en direct
      </button>

      <?php if (is_user_logged_in()) : ?>

        <a href="<?php echo site_url('/my-announcements'); ?>">📋 Mes Annonces</a>

        <a href="<?php echo site_url('/post-announcement'); ?>" class="btn-primary">
          ➕ Déposer une annonce
        </a>

        <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn-connect">
           Déconnexion
        </a>

      <?php else : ?>

        <a href="<?php echo wp_login_url(); ?>" class="btn-connect" >→ Se connecter</a>

      <?php endif; ?>

    </nav>

    <!-- MOBILE BUTTON -->
    <button class="menu-toggle" onclick="toggleMenu()">
      ☰
    </button>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="mobile-menu">

    <button onclick="openChat()">💬 Chat en direct</button>

    <?php if (is_user_logged_in()) : ?>

      <a href="<?php echo site_url('/my-announcements'); ?>">Mes Annonces</a>
      <a href="<?php echo site_url('/post-announcement'); ?>">Déposer une annonce</a>
      <a href="<?php echo wp_logout_url(home_url()); ?>">Déconnexion</a>

    <?php else : ?>

      <a href="<?php echo wp_login_url(); ?>">Admin Login</a>
      <a href="<?php echo wp_login_url(); ?>">Se connecter</a>

    <?php endif; ?>

  </div>

</header>

<!-- CHAT MODAL -->
<div id="chatModal" class="chat-modal">
  <div class="chat-content">

    <div class="chat-header">
      <h2>💬 Chat en direct</h2>
      <button onclick="closeChat()">✖</button>
    </div>

    <div class="chat-body">
      <p>
        La messagerie en direct sera bientôt disponible. Vous pourrez bientôt discuter avec les autres membres !
      </p>
    </div>

    <div class="chat-footer">
      <button onclick="closeChat()">Compris</button>
    </div>

  </div>
</div>