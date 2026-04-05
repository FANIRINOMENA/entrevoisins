<?php
/*
Template Name: commande
*/
get_header();
?>

<main class="">

<div class="page-wrapper">
 
  <!-- Returning customer bar -->
  <div class="returning-bar">
    Returning customer? <a href="#">Click here to login</a>
  </div>
 
  <div class="checkout-grid">
 
    <!-- LEFT: Billing Form -->
    <div class="form-section">
 
      <div class="field-group">
        <label>Prénom</label>
        <input type="text" placeholder="Votre prénom">
      </div>
 
      <div class="field-group">
        <label>Nom</label>
        <input type="text" placeholder="Votre nom">
      </div>
 
      <div class="field-group">
        <label>Adresse e-mail</label>
        <input type="email" placeholder="exemple@email.com">
      </div>
 
      <div class="field-group">
        <label>Téléphone</label>
        <input type="tel" placeholder="+000 000 000 000">
      </div>
 
      <div class="field-group">
        <label>Pays *</label>
        <div class="select-wrapper">
          <select>
            <option value="">Sélectionner un pays</option>
            <option>Madagascar</option>
            <option>France</option>
            <option>Côte d'Ivoire</option>
            <option>Sénégal</option>
            <option>Cameroun</option>
          </select>
        </div>
      </div>
 
      <div class="field-group">
        <label>Adresse de livraison *</label>
        <input type="text" placeholder="Numéro et nom de rue">
      </div>
 
    </div>
 
    <!-- RIGHT: Order Summary + Payment -->
    <div>
 
      <!-- Order Summary -->
      <div class="order-summary">

        <div class="order-items">

          <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
            $_product = $cart_item['data'];
          ?>

          <div class="order-item">
            <div class="item-img">
              <?php echo $_product->get_image('thumbnail'); ?>
            </div>

            <div class="item-info">
              <div class="item-name">
                <?php echo $_product->get_name(); ?>
              </div>
              <div class="item-qty">
                × <?php echo $cart_item['quantity']; ?>
              </div>
            </div>

            <div class="item-price">
              <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
            </div>
          </div>

          <?php endforeach; ?>

        </div>

        <!-- TOTALS -->
        <div class="summary-lines">

          <div class="summary-row">
            <span><strong>Sous-total</strong></span>
            <span><?php wc_cart_totals_subtotal_html(); ?></span>
          </div>

          <div class="summary-row shipping">
            <span>Expédition</span>
            <span><?php wc_cart_totals_shipping_html(); ?></span>
          </div>

          <div class="summary-row total">
            <span>TOTAL</span>
            <span><?php wc_cart_totals_order_total_html(); ?></span>
          </div>

        </div>

      </div>
 
      <!-- Coupon -->
      <div class="coupon-box">
        Have a coupon? <a href="#">Click here to enter your coupon code</a>
      </div>
 
      <!-- Payment -->
      <div class="payment-section">
        <div class="payment-method">
 
          <div class="payment-header">
            <input type="radio" id="card" name="payment" checked>
            <label for="card">
              <span>Carte de crédit/débit</span>
              <span class="card-icon">💳</span>
            </label>
          </div>
 
          <div class="card-field-group">
            <label>Numéro de carte</label>
            <div class="card-input-wrap">
              <input type="text" placeholder="1234 1234 1234 1234" maxlength="19">
              <div class="card-logos">
                <div class="card-logo visa">VISA</div>
                <div class="card-logo mc"></div>
                <div class="card-logo discover">DISC</div>
              </div>
            </div>
          </div>
 
          <div class="card-row">
            <div class="card-field-group">
              <label>Date d'expiration</label>
              <div class="card-input-wrap">
                <input type="text" placeholder="MM / AA" maxlength="7">
              </div>
            </div>
            <div class="card-field-group">
              <label>Code de sécurité</label>
              <div class="card-input-wrap cvc-wrap">
                <input type="text" placeholder="CVC" maxlength="4">
                <span class="cvc-icon">💳</span>
              </div>
            </div>
          </div>
 
        </div>
 
        <div class="privacy-note">
          Vos données personnelles seront utilisées pour traiter votre commande, soutenir votre expérience sur ce site Web et à d'autres fins décrites dans notre politique de confidentialité
        </div>
 
        <button class="btn-commander">Commander</button>
 
      </div>
    </div>
 
  </div>
</div>
 
<!-- Bottom Nav Bar -->
<div class="bottom-nav">
  <div class="nav-item">
    <span>🖥️</span>
    <span>Informations</span>
  </div>
  <div class="sep"></div>
  <div class="nav-item">
    <span>🧾</span>
    <span>Méthodes de test</span>
  </div>
  <div class="sep"></div>
  <div class="dots">⋯</div>
</div>

</main>

<?php get_footer(); ?>