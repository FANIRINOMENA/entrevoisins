<?php
// inc/rest-show-logo.php
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Retourne les données du logo du site.
 *
 * Priorité :
 * 1) custom_logo
 * 2) site_icon
 * 3) fallback null
 *
 * @param int $size Taille souhaitée pour le fallback site icon.
 * @return array{
 *   url:?string,
 *   source:string,
 *   attachment_id:int,
 *   width:int,
 *   height:int
 * }
 */
function cocobe_get_logo_data(int $size = 512): array
{
    $result = [
        'url' => null,
        'source' => 'none',
        'attachment_id' => 0,
        'width' => 0,
        'height' => 0,
    ];

    // 1) Logo personnalisé
    $custom_logo_id = (int) get_theme_mod('custom_logo');
    if ($custom_logo_id > 0) {
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (is_array($image) && !empty($image[0])) {
            $result['url'] = $image[0];
            $result['source'] = 'custom_logo';
            $result['attachment_id'] = $custom_logo_id;
            $result['width'] = isset($image[1]) ? (int) $image[1] : 0;
            $result['height'] = isset($image[2]) ? (int) $image[2] : 0;

            return $result;
        }
    }

    // 2) Icône du site
    $site_icon_id = (int) get_option('site_icon');
    $site_icon_url = get_site_icon_url($size);

    if (!empty($site_icon_url)) {
        $result['url'] = $site_icon_url;
        $result['source'] = 'site_icon';
        $result['attachment_id'] = $site_icon_id;

        if ($site_icon_id > 0) {
            $meta = wp_get_attachment_metadata($site_icon_id);
            if (is_array($meta)) {
                $result['width'] = isset($meta['width']) ? (int) $meta['width'] : 0;
                $result['height'] = isset($meta['height']) ? (int) $meta['height'] : 0;
            }
        }

        return $result;
    }

    return $result;
}

/**
 * Nettoie et borne la taille demandée.
 */
function cocobe_normalize_logo_size($size): int
{
    $size = is_numeric($size) ? (int) $size : 512;

    if ($size < 64) {
        $size = 64;
    }

    if ($size > 2048) {
        $size = 2048;
    }

    return $size;
}

/**
 * Callback REST : GET /site-logo
 */
function cocobe_rest_get_site_logo(WP_REST_Request $request): WP_REST_Response
{
    $size = cocobe_normalize_logo_size($request->get_param('size'));
    $logo = cocobe_get_logo_data($size);

    $data = [
        // Compat front existant
        'url' => $logo['url'],
        'logo' => $logo['url'],
        'logo_url' => $logo['url'],

        // Infos utiles
        'source' => $logo['source'],
        'attachment_id' => $logo['attachment_id'],
        'width' => $logo['width'],
        'height' => $logo['height'],
        'size' => $size,

        // Site infos
        'site_name' => get_bloginfo('name'),
        'home_url' => home_url('/'),

        // État
        'found' => !empty($logo['url']),
    ];

    return new WP_REST_Response($data, 200);
}

/**
 * Schéma des arguments REST.
 */
function cocobe_rest_site_logo_args(): array
{
    return [
        'size' => [
            'description' => 'Dimension souhaitée pour le fallback de l’icône du site.',
            'type' => 'integer',
            'required' => false,
            'default' => 512,
            'sanitize_callback' => 'absint',
            'validate_callback' => function ($param) {
                return is_numeric($param) && (int) $param >= 1;
            },
        ],
    ];
}

/**
 * Enregistre les routes REST.
 *
 * Routes exposées :
 * - /wp-json/site-info/v1/site-logo
 * - /wp-json/cocobe/v1/site-logo
 */
add_action('rest_api_init', function () {
    $route_args = [
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'cocobe_rest_get_site_logo',
        'permission_callback' => '__return_true',
        'args' => cocobe_rest_site_logo_args(),
    ];

    // Namespace générique pour ton front actuel
    register_rest_route('site-info/v1', '/site-logo', $route_args);

    // Namespace marque
    register_rest_route('cocobe/v1', '/site-logo', $route_args);
});
