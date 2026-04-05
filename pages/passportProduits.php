<?php
/*
Template Name: passeport produits
*/
get_header();

$product = wc_get_product(get_the_ID());
?>

<main>

<div class="product-wrap">

  <!-- IMAGE -->
  <div class="gallery">
    <div class="gallery-main">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
    </div>
  </div>

  <!-- INFO -->
  <div class="product-info">

    <!-- ✅ NOM PRODUIT DYNAMIQUE -->
    <h1 class="product-title"><?php the_title(); ?></h1>

    <!-- CATÉGORIE -->
    <div class="meta-row">
      <span class="meta-label">Catégorie :</span>
      <?php echo wc_get_product_category_list(get_the_ID()); ?>
    </div>

    <!-- PRIX -->
    <div class="price-row">
      <span class="price"><?php echo $product->get_price_html(); ?></span>
    </div>

    <!-- DESCRIPTION -->
    <div class="story">
      <?php the_content(); ?>
    </div>

    <!-- 🔥 PASSEPORT PRODUIT -->
    <div class="product-passport">
      <h3>Passeport du produit</h3>

      <ul>
        <li><strong>Origine :</strong> <?php echo get_post_meta(get_the_ID(), 'origine', true); ?></li>
        <li><strong>Matière :</strong> <?php echo get_post_meta(get_the_ID(), 'matiere', true); ?></li>
        <li><strong>Fabrication :</strong> <?php echo get_post_meta(get_the_ID(), 'fabrication', true); ?></li>
        <li><strong>Entretien :</strong> <?php echo get_post_meta(get_the_ID(), 'entretien', true); ?></li>
        <li><strong>Authenticité :</strong> <?php echo get_post_meta(get_the_ID(), 'authenticite', true); ?></li>
      </ul>
    </div>

    <!-- AJOUT PANIER -->
    <div class="cart-row">
      <?php woocommerce_template_single_add_to_cart(); ?>
    </div>

  </div>

</div>

</main>

<?php get_footer(); ?>