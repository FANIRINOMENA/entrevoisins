<?php
if (!defined('ABSPATH')) exit;


// Canonical par défaut (laisser Yoast/RankMath gérer si installé)
add_action('wp_head', function () {

    // Laisser les plugins SEO gérer
    if (defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION')) return;

    $canonical = '';

    if (is_singular()) {
        $canonical = get_permalink();

    } elseif (is_post_type_archive('product')) {
        $canonical = get_post_type_archive_link('product');

    } elseif (function_exists('is_product_taxonomy') && is_product_taxonomy()) {
        $canonical = get_term_link(get_queried_object());
    }

    if (!empty($canonical) && !is_wp_error($canonical)) {
        echo '<link rel="canonical" href="' . esc_url($canonical) . '" />' . "\n";
    }

}, 1);

// BreadcrumbList minimal (si pas de plugin)
add_action('wp_head', function () {
    if (!function_exists('is_woocommerce')) return;
    if (!is_product() && !is_product_taxonomy()) return;
    $items = [];
    $items[] = ['@type' => 'ListItem', 'position' => 1, 'name' => get_bloginfo('name'), 'item' => home_url('/')];
    if (is_product()) {
        $terms = wc_get_product_terms(get_the_ID(), 'product_cat', ['fields' => 'all']);
        if (!empty($terms)) {
            $cat = array_shift($terms);
            $items[] = ['@type' => 'ListItem', 'position' => 2, 'name' => $cat->name, 'item' => get_term_link($cat)];
        }
        $items[] = ['@type' => 'ListItem', 'position' => count($items) + 1, 'name' => get_the_title(), 'item' => get_permalink()];
    }
    $json = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items];
    echo '<script type="application/ld+json">' . wp_json_encode($json) . '</script>';
}, 99);
