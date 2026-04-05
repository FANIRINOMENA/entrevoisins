<?php
/*
Template Name: faq
*/
get_header();
?>

<main class="">

<div class="faq-header">
    <h1>FAQ</h1>
    <p>Votre guide d'information rapide.</p>
  </div>
 
  <div class="faq-main">
 
    <!-- Paiement -->
    <div class="faq-section">
      <h2>Paiement</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question open" onclick="toggle(this)">
            <span class="faq-icon">−</span>
            Quels moyens de paiement acceptez-vous ?
          </div>
          <div class="faq-answer open">
            Nous acceptons <strong>Mobile Money, Wave, Orange Money, MTN, Visa, Mastercard, PayPal et Apple Pay</strong>.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question" onclick="toggle(this)">
            <span class="faq-icon">+</span>
            Mon paiement est-il sécurisé ?
          </div>
          <div class="faq-answer">
            Oui, tous vos paiements sont cryptés et sécurisés via des protocoles SSL. Vos informations bancaires ne sont jamais stockées sur nos serveurs.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question" onclick="toggle(this)">
            <span class="faq-icon">+</span>
            Quand suis-je débité(e) ?
          </div>
          <div class="faq-answer">
            Le débit s'effectue au moment de la validation de votre commande. Vous recevrez une confirmation par e-mail une fois le paiement traité.
          </div>
        </div>
      </div>
    </div>
 
    <!-- Livraison -->
    <div class="faq-section">
      <h2>Livraison</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question open" onclick="toggle(this)">
            <span class="faq-icon">−</span>
            Dans quels pays livrez-vous ?
          </div>
          <div class="faq-answer open">
            Nous livrons <strong>en Côte d'Ivoire</strong> et <strong>à l'international</strong>.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question" onclick="toggle(this)">
            <span class="faq-icon">+</span>
            Quels sont les délais de livraison ?
          </div>
          <div class="faq-answer">
            Les délais varient selon votre localisation : <strong>2 à 5 jours ouvrés</strong> en Côte d'Ivoire, et <strong>7 à 21 jours ouvrés</strong> pour les livraisons internationales.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question" onclick="toggle(this)">
            <span class="faq-icon">+</span>
            Ma commande est-elle suivie ?
          </div>
          <div class="faq-answer">
            Oui. Dès l'expédition, vous recevrez un numéro de suivi par e-mail pour suivre votre colis en temps réel.
          </div>
        </div>
      </div>
    </div>
 
    <!-- Expédition et retours -->
    <div class="faq-section">
      <h2>Expédition et retours</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question open" onclick="toggle(this)">
            <span class="faq-icon">−</span>
            Puis-je retourner un article ?
          </div>
          <div class="faq-answer open">
            Oui. Vous disposez de <strong>30 jours</strong> après réception pour retourner un article <strong>non porté, non endommagé</strong> et dans son <strong>emballage d'origine</strong> (boîte, étui, étiquettes).
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question" onclick="toggle(this)">
            <span class="faq-icon">+</span>
            Qui prend en charge les frais de retour ?
          </div>
          <div class="faq-answer">
            Les frais de retour sont à la charge du client, sauf en cas d'erreur de notre part ou d'article défectueux.
          </div>
        </div>
      </div>
    </div>
 
    <!-- Remboursement -->
    <div class="faq-section">
      <h2>Remboursement</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question open" onclick="toggle(this)">
            <span class="faq-icon">−</span>
            Quand serai-je remboursé(e) ?
          </div>
          <div class="faq-answer open">
            Le remboursement est effectué <strong>sous 10 jours ouvrés</strong> après réception et vérification de l'article retourné.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question" onclick="toggle(this)">
            <span class="faq-icon">+</span>
            Q : Comment serai-je remboursé(e) ?
          </div>
          <div class="faq-answer">
            Le remboursement sera effectué via le même moyen de paiement utilisé lors de votre achat.
          </div>
        </div>
      </div>
    </div>
 
  </div>

</main>

<?php get_footer(); ?>