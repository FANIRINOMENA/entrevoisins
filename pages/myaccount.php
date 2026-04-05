<?php
/*
Template Name: mon compte
*/
get_header();
?>

<div class="account-wrapper">
 
  <!-- Tabs -->
  <div class="tabs">
    <button class="tab-btn active" id="btn-login" onclick="switchTab('login')">
      <!-- Arrow-circle icon -->
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <circle cx="12" cy="12" r="9"/>
        <path d="M10 8l4 4-4 4"/>
      </svg>
      Login
    </button>
    <button class="tab-btn" id="btn-register" onclick="switchTab('register')">
      <!-- Person icon -->
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <circle cx="12" cy="8" r="3.5"/>
        <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
      </svg>
      Register
    </button>
  </div>
 
  <!-- LOGIN PANEL -->
  <div class="panel active" id="panel-login">
    <div class="form-group">
      <label for="login-user">Username or email address <span class="req">*</span></label>
      <input type="text" id="login-user" autocomplete="username"/>
    </div>
 
    <div class="form-group">
      <label for="login-pw">Password <span class="req">*</span></label>
      <div class="password-wrapper">
        <input type="password" id="login-pw" autocomplete="current-password"/>
        <button class="toggle-pw" onclick="togglePassword('login-pw', this)" type="button">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
          Show password
        </button>
      </div>
    </div>
 
    <label class="remember" style="margin-top:42px">
      <input type="checkbox" id="remember-me"/>
      Remember me
    </label>
 
    <button class="btn-submit" type="button">Log in</button>
    <br/>
    <a href="#" class="lost-pw">Lost your password?</a>
  </div>
 
  <!-- REGISTER PANEL -->
  <div class="panel" id="panel-register">
    <div class="form-group">
      <label for="reg-user">Username <span class="req">*</span></label>
      <input type="text" id="reg-user" autocomplete="username"/>
    </div>
 
    <div class="form-group">
      <label for="reg-email">Email address <span class="req">*</span></label>
      <input type="email" id="reg-email" autocomplete="email"/>
    </div>
 
    <div class="form-group">
      <label for="reg-pw">Password <span class="req">*</span></label>
      <div class="password-wrapper">
        <input type="password" id="reg-pw" autocomplete="new-password"/>
        <button class="toggle-pw" onclick="togglePassword('reg-pw', this)" type="button">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
          Show password
        </button>
      </div>
    </div>
 
    <p class="privacy-note" style="margin-top:42px">
      Vos données personnelles seront utilisées pour traiter votre commande, soutenir
      votre expérience sur ce site Web et à d'autres fins décrites dans notre
      <a href="#">politique de confidentialité</a>
    </p>
 
    <button class="btn-submit" type="button">Register</button>
  </div>
 
</div>

<?php get_footer(); ?>