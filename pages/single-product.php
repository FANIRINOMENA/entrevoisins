<?php
defined('ABSPATH') || exit;
get_header();

global $product;
?>

<div class="product-page">

  <div class="container">

    <!-- BACK -->
    <a href="<?php echo get_permalink( wc_get_page_id('shop') ); ?>" class="back-link">
      ← Back to Store
    </a>

    <div class="product-grid">

      <!-- IMAGE -->
      <div class="product-gallery">

        <div class="main-image">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('large');
          }
          ?>
        </div>

        <!-- THUMBNAILS -->
        <div class="thumbnails">
          <?php
          $attachment_ids = $product->get_gallery_image_ids();

          foreach ($attachment_ids as $attachment_id) {
            echo '<div class="thumb">';
            echo wp_get_attachment_image($attachment_id, 'thumbnail');
            echo '</div>';
          }
          ?>
        </div>

      </div>

      <!-- INFO -->
      <div class="product-info">

        <h1><?php the_title(); ?></h1>

        <p class="subtitle">
          <?php echo $product->get_short_description(); ?>
        </p>

        <!-- PRICE -->
        <div class="price">
          <?php echo $product->get_price_html(); ?>
        </div>

        <!-- DESCRIPTION -->
        <div class="description">
          <?php the_content(); ?>
        </div>

        <!-- QUANTITY + ADD TO CART -->
        <form class="cart" method="post" enctype="multipart/form-data">
          
          <div class="quantity-box">
            <?php
            woocommerce_quantity_input();
            ?>
          </div>

          <button type="submit" name="add-to-cart" value="<?php echo $product->get_id(); ?>" class="add-to-cart">
            🛒 Add to Cart
          </button>

        </form>

        <!-- STOCK -->
        <div class="stock">
          <?php echo wc_get_stock_html($product); ?>
        </div>

      </div>

    </div>

  </div>

</div>

<?php get_footer(); ?>