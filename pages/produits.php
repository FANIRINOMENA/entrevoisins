<?php
/*
Template Name: produits
*/
get_header();
?>

<main class="">
     <!-- ═══════════════════════════ PRODUCT ═══════════════════════════ -->
<div class="product-wrap">
 
 <!-- GALLERY -->
 <div class="gallery">
   <div class="gallery-main">
     <!-- Main product image placeholder – replace src with the real image -->
     <img id="mainImg" src="https://via.placeholder.com/600x600/f9f6f1/cccccc?text=AKAN+CROCO+Blanc" alt="AKAN CROCO Blanc"/>
   </div>
   <div class="gallery-thumbs">
     <div class="thumb active" onclick="setThumb(this, 'https://via.placeholder.com/600x600/f9f6f1/cccccc?text=1')">
       <img src="https://via.placeholder.com/72x72/f9f6f1/cccccc?text=1" alt="Vue 1"/>
     </div>
     <div class="thumb" onclick="setThumb(this, 'https://via.placeholder.com/600x600/f9f6f1/cccccc?text=2')">
       <img src="https://via.placeholder.com/72x72/f0ece4/cccccc?text=2" alt="Vue 2"/>
     </div>
     <div class="thumb" onclick="setThumb(this, 'https://via.placeholder.com/600x600/f9f6f1/cccccc?text=3')">
       <img src="https://via.placeholder.com/72x72/e8e3da/cccccc?text=3" alt="Vue 3"/>
     </div>
     <div class="thumb" onclick="setThumb(this, 'https://via.placeholder.com/600x600/f9f6f1/cccccc?text=4')">
       <img src="https://via.placeholder.com/72x72/ddd7cc/cccccc?text=4" alt="Vue 4"/>
     </div>
     <div class="thumb" onclick="setThumb(this, 'https://via.placeholder.com/600x600/f9f6f1/cccccc?text=5')">
       <img src="https://via.placeholder.com/72x72/d4cec4/cccccc?text=5" alt="Vue 5"/>
     </div>
   </div>
 </div>

 <!-- PRODUCT INFO -->
 <div class="product-info">
   <h1 class="product-title">AKAN CROCO Blanc</h1>

   <div class="meta-row">
     <span class="meta-label">Category&nbsp;:</span>
     <a href="#" class="tag-link">AKAN CROCO</a>
   </div>
   <div class="meta-row">
     <span class="meta-label">Marque&nbsp;:</span>
     <a href="#" class="brand-link">COCOBE</a>
   </div>

   <hr class="divider"/>

   <div class="story">
     <p>Nous souhaitons mettre en lumière ce peuple reconnu pour son hospitalité, sa richesse, son honorabilité. 🤝</p>
     <p>Les AKAN sont un groupement de peuples, provenant de la Côte d'Ivoire et du Ghana. ⭐</p>
     <p>Ils ont marqué l'Afrique de l'Ouest en particulier par leurs actions, leur importante population mais également par toutes les personnalités fortes qui sont sorties d'eux : La reine POKOU, Le premier Président Ivoirien Son Excellence Feu Monsieur Félix HOUPHOUËT B., le roi OSEI TOUTOU et bien d'autres grandes figures aussi épatantes les unes des autres. 🤩🤩</p>
     <p>Ce symbole inscrit sur ce sac, rappel l'impact significatif du peuple AKAN et son patrimoine culturel incontournable en Afrique.</p>
   </div>

   <!-- ACCORDION -->
   <div class="accordion">
     <div class="accordion-header" id="accHeader" onclick="toggleAccordion()">
       Description
       <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <polyline points="6 9 12 15 18 9"/>
       </svg>
     </div>
     <div class="accordion-body open" id="accBody">
       <blockquote>A travers cette œuvre d'art, embellie par ce bijou doré, représentant le masque AKAN, symbole puissant pour la société traditionnelle africaine. 🌟</blockquote>
       <p>Chaque sac est façonné avec soin pour honorer l'héritage culturel du peuple AKAN et offrir une pièce unique alliant tradition et élégance contemporaine.</p>
     </div>
   </div>

   <!-- PRICE -->
   <div class="price-row">
     <span class="price">120&nbsp;000 CFA</span>
   </div>

   <!-- ADD TO CART -->
   <div class="cart-row">
     <div class="qty-control">
       <button onclick="changeQty(-1)">−</button>
       <input type="number" id="qty" value="1" min="1"/>
       <button onclick="changeQty(1)">+</button>
     </div>
     <button class="btn-cart">Ajouter au panier</button>
     <button class="btn-wish" title="Liste de souhaits">
       <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
         <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
       </svg>
     </button>
   </div>

 </div><!-- /product-info -->
</div><!-- /product-wrap -->

<!-- ═══════════════════════════ TRUST BAR ═══════════════════════════ -->
<div class="trust-bar">
 <div class="trust-item">
   <div class="trust-icon">
     <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
       <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>
     </svg>
   </div>
   <span class="trust-label">Paiement sécurisé</span>
   <span class="trust-sub">Visa · Mastercard</span>
 </div>
 <div class="trust-item">
   <div class="trust-icon">
     <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
       <rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>
     </svg>
   </div>
   <span class="trust-label">Livraison rapide</span>
   <span class="trust-sub">Sous 2–3 jours partout dans le monde</span>
 </div>
 <div class="trust-item">
   <div class="trust-icon">
     <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
       <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 6 6l.88-.88a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
     </svg>
   </div>
   <span class="trust-label">Service client</span>
   <span class="trust-sub">+225 07 67 22 59 13</span>
 </div>
 <div class="trust-item">
   <div class="trust-icon">
     <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
       <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
     </svg>
   </div>
   <span class="trust-label">Nos boutiques</span>
   <span class="trust-sub">&nbsp;</span>
 </div>
</div>

<!-- ═══════════════════════════ UPSELL ═══════════════════════════ -->
<div class="upsell">
 <h2 class="section-title">Vous aimerez aussi</h2>
 <div class="upsell-grid">

   <div class="upsell-card">
     <div class="upsell-img">
       <img src="https://via.placeholder.com/400x400/0a0a1a/444?text=Bleu" alt="AKAN Serpenté Bleu"/>
       <div class="img-overlay">
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
         </div>
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
         </div>
       </div>
     </div>
     <div class="upsell-name-wrap">
       <span class="upsell-name-real">AKAN Serpenté Bleu</span>
       <span class="upsell-name-hover">Ajouter au panier</span>
     </div>
     <span class="upsell-price">150&nbsp;000 CFA</span>
   </div>

   <div class="upsell-card">
     <div class="upsell-img">
       <img src="https://via.placeholder.com/400x400/f0e8d0/888?text=Champagne" alt="AKAN Lézard Champagne"/>
       <div class="img-overlay">
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
         </div>
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
         </div>
       </div>
     </div>
     <div class="upsell-name-wrap">
       <span class="upsell-name-real">AKAN Lézard Champagne</span>
       <span class="upsell-name-hover">Ajouter au panier</span>
     </div>
     <span class="upsell-price">120&nbsp;000 CFA</span>
   </div>

   <div class="upsell-card">
     <div class="upsell-img">
       <img src="https://via.placeholder.com/400x400/8b1a2a/444?text=Rouge" alt="IMPÉRIALE Rouge Daim"/>
       <span class="out-of-stock-badge">Out of stock</span>
       <div class="img-overlay">
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
         </div>
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
         </div>
       </div>
     </div>
     <div class="upsell-name-wrap">
       <span class="upsell-name-real">IMPÉRIALE Rouge Daim</span>
       <span class="upsell-name-hover">Ajouter au panier</span>
     </div>
     <span class="upsell-price">200&nbsp;000 CFA</span>
   </div>

   <div class="upsell-card">
     <div class="upsell-img">
       <img src="https://via.placeholder.com/400x400/1a1a1a/555?text=Noir" alt="Portefeuille Homme Lisse Noir"/>
       <div class="img-overlay">
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
         </div>
         <div class="overlay-icon">
           <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
         </div>
       </div>
     </div>
     <div class="upsell-name-wrap">
       <span class="upsell-name-real">PORTEFEUILLE Homme Lisse Noir</span>
       <span class="upsell-name-hover">Ajouter au panier</span>
     </div>
     <span class="upsell-price">25&nbsp;000 CFA</span>
   </div>

 </div>
</div>
</main>

<?php get_footer(); ?>