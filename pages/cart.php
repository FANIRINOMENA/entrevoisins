<?php
/*
Template Name: Pannier 
*/
get_header();
?>

<main>

<!-- Stepper -->
<nav class="stepper">
  <div class="step active">
    <span class="num">1 sur 3</span>
    Panier
  </div>
  <div class="step">
    <span class="num">2 sur 3</span>
    Détails personnels
  </div>
  <div class="step">
    <span class="num">3 sur 3</span>
    Confirmation
  </div>
</nav>

<div class="cart-layout">

  <!-- ITEMS -->
  <div>
    <div class="cart-items">

      <?php if ( WC()->cart->is_empty() ) : ?>
        <p>Votre panier est vide.</p>
      <?php else : ?>

        <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
          $_product   = $cart_item['data'];
          $product_id = $cart_item['product_id'];
        ?>

        <div class="cart-item">

          <!-- IMAGE -->
          <div class="item-img">
            <?php echo $_product->get_image(); ?>
          </div>

          <!-- INFO -->
          <div class="item-info">
            <div class="item-name">
              <?php echo $_product->get_name(); ?>
            </div>
            <div class="item-price">
              <?php echo wc_price($_product->get_price()); ?> × <?php echo $cart_item['quantity']; ?>
            </div>
          </div>

          <!-- QUANTITY -->
          <div class="qty">
            <a href="<?php echo wc_get_cart_url(); ?>?remove_item=<?php echo $cart_item_key; ?>">−</a>
            <span><?php echo $cart_item['quantity']; ?></span>
            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=<?php echo $product_id; ?>">+</a>
          </div>

          <!-- TOTAL -->
          <div class="item-total">
            <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
          </div>

          <!-- REMOVE -->
          <a class="item-remove" href="<?php echo wc_get_cart_remove_url($cart_item_key); ?>">
            ✕
          </a>

        </div>

        <?php endforeach; ?>

      <?php endif; ?>

    </div>

    <!-- COUPON -->
    <form method="post" class="coupon-row">
      <input type="text" name="coupon_code" placeholder="Code promo" />
      <button type="submit" name="apply_coupon" class="btn-coupon">
        Appliquer
      </button>
    </form>

  </div>

  <!-- SUMMARY -->
  <aside class="cart-summary">
    <h2 class="summary-title">Cart totals</h2>

    <div class="summary-row">
      <span class="label">Sous-total</span>
      <span class="value">
        <?php echo WC()->cart->get_cart_subtotal(); ?>
      </span>
    </div>

    <div class="shipping-block">
      <div class="sh-label">
        <span>Expédition</span>
      </div>

      <?php foreach ( WC()->cart->get_shipping_packages() as $package ) :
        $rates = WC()->shipping()->calculate_shipping_for_package($package);
      endforeach; ?>

      <div class="sh-label">
        <span>Livraison :</span>
        <span>
          <?php echo WC()->cart->get_shipping_total() > 0 ? wc_price(WC()->cart->get_shipping_total()) : '—'; ?>
        </span>
      </div>

      <p class="shipping-note">
        Calculée à l’étape suivante.
      </p>
    </div>

    <hr class="divider"/>

    <div class="total-row">
      <span class="t-label">Total</span>
      <span class="t-value">
        <?php echo WC()->cart->get_total(); ?>
      </span>
    </div>

    <!-- BUTTONS -->
    <a href="<?php echo wc_get_checkout_url(); ?>" class="btn-checkout">
      Proceed to checkout
    </a>

    <button class="btn-gpay">
      <span class="gpay-logo">Google Pay</span>
    </button>

  </aside>

</div>

</main>

<?php get_footer(); ?>