<?php
/*
Template Name: sacs 
*/
get_header();
?>

<main class="">

<!-- TOP BAR -->
<div class="topbarC">

  <!-- GAUCHE -->
  <div class="topbar-left">
    <span class="count">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $per_page = 8;

      $args = array(
          'post_type' => 'product',
          'posts_per_page' => -1,
          'tax_query' => array(
              array(
                  'taxonomy' => 'product_cat',
                  'field'    => 'slug',
                  'terms'    => 'sacs', 
              )
          )
      );

      $query = new WP_Query($args);
      $total = $query->found_posts;

      $start = ($paged - 1) * $per_page + 1;
      $end = min($start + $per_page - 1, $total);

      echo "Affichage de $start-$end sur $total";

      wp_reset_postdata();
      ?>
    </span>

    <button class="filter-btn">
      Filtre
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
        <line x1="4" y1="6" x2="20" y2="6"/>
        <line x1="4" y1="12" x2="20" y2="12"/>
        <line x1="4" y1="18" x2="20" y2="18"/>
      </svg>
    </button>
  </div>

  <!-- DROITE -->
  <div class="topbar-right">
    <select class="sort-select">
      <option>Tri du plus récent au plus ancien</option>
      <option>Prix croissant</option>
      <option>Prix décroissant</option>
      <option>Nom A–Z</option>
    </select>
  </div>

</div>
 
 <!-- PRODUCT GRID -->
 <div class="grid" id="productGrid"></div>
 


</main>

<script>
const products = [
<?php
$args = array(
  'post_type' => 'product',
  'posts_per_page' => 8,
  'tax_query' => array(
    array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => 'sacs'
    )
  )
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post();
    global $product;
?>
{
  id: <?php echo $product->get_id(); ?>,
  name: "<?php the_title(); ?>",
  price: "<?php echo strip_tags($product->get_price_html()); ?>",
  img: "<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>",
  link: "<?php the_permalink(); ?>"
},
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
];

const grid = document.getElementById('productGrid');

products.forEach(p => {
  const card = document.createElement('div');
  card.className = 'card';

  card.innerHTML = `
    <div class="card-img-wrap">
      
      <a href="${p.link}">
        <img src="${p.img}" alt="${p.name}">
      </a>

    </div>

    <div class="hover-center-icons">

        <!-- OEIL -->
        <a href="${p.link}" class="icon-btn" title="Voir">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </a>

        <!-- COEUR -->
        <button class="icon-btn wishlist-btn" data-id="${p.id}">

      </div>

    <div class="card-info">
      <div class="name-wrapper">
        <div class="name">${p.name}</div>

        <div class="add-to-cart-hover">
          <a href="<?php echo esc_url( wc_get_cart_url() ); ?>?add-to-cart=${p.id}">
            Ajouter au panier
          </a>
        </div>
      </div>

      <div class="price">${p.price}</div>
    </div>
  `;

  grid.appendChild(card);
});
</script>

<?php get_footer(); ?>