<?php
/*
Template Name: Shop Page
*/
get_header();
?>

<div class="shop-page">

  <div class="shop-container">

    <!-- HEADER -->
    <div class="shop-header">
      <h1>Shop our collection</h1>
      <p>Discover unique vintage and retro pieces for your home</p>
    </div>

    <!-- PRODUCTS -->
    <div class="shop-products">
      <?php
      if (class_exists('WooCommerce')) {

        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 12
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post();
            global $product;
      ?>

        <div class="product-card">
          <a href="<?php the_permalink(); ?>">

            <div class="product-image">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
              } ?>
            </div>

            <div class="product-info">
              <h3><?php the_title(); ?></h3>
              <p class="price"><?php echo $product->get_price_html(); ?></p>
            </div>

          </a>
        </div>

      <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>No products found</p>';
        endif;

      } else {
        echo '<p>WooCommerce is not installed</p>';
      }
      ?>
    </div>

  </div>

</div>

<?php get_footer(); ?>