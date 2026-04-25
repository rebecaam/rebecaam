<?php
/**
 * DigitalU theme functions
 */

if (!defined('ABSPATH')) exit;

define('DIGITALU_VERSION', '1.0.0');
define('DIGITALU_DIR', get_template_directory());
define('DIGITALU_URI', get_template_directory_uri());

/* ---------------------------------------------------------------
 * Theme support
 * --------------------------------------------------------------- */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('automatic-feed-links');
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'principal' => __('Menú principal', 'digitalu'),
    ]);
});

/* ---------------------------------------------------------------
 * Enqueue scripts and styles
 * --------------------------------------------------------------- */
add_action('wp_enqueue_scripts', function () {
    // Google Fonts (solo los pesos que de verdad usamos)
    wp_enqueue_style(
        'digitalu-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Sora:wght@400;600;700&family=Space+Grotesk:wght@600&display=swap',
        [],
        null
    );

    // CSS principal
    wp_enqueue_style(
        'digitalu-styles',
        DIGITALU_URI . '/assets/css/styles.css',
        [],
        filemtime(DIGITALU_DIR . '/assets/css/styles.css')
    );

    // JS principal
    wp_enqueue_script(
        'digitalu-main',
        DIGITALU_URI . '/assets/js/main.js',
        [],
        filemtime(DIGITALU_DIR . '/assets/js/main.js'),
        true
    );
});

/* ---------------------------------------------------------------
 * Cleanup: quita bloat de WP que nadie usa
 * --------------------------------------------------------------- */
add_action('init', function () {
    // Generator y links innecesarios
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);

    // Emojis (~13 KB de JS inline + 1 CSS)
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('emoji_svg_url', '__return_false');
    add_filter('option_use_smilies', '__return_false');

    // oEmbed
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // REST API link en head (el endpoint sigue funcionando)
    remove_action('wp_head', 'rest_output_link_wp_head');
});

/**
 * Quita el CSS de bloques de Gutenberg si no se usa en frontend.
 * Lo dejamos activo porque vamos a usar bloques HTML personalizados,
 * pero si confirmas que no usarás *ningún* bloque visual, descomenta.
 */
// add_action('wp_enqueue_scripts', function () {
//     wp_dequeue_style('wp-block-library');
//     wp_dequeue_style('wp-block-library-theme');
//     wp_dequeue_style('global-styles');
//     wp_dequeue_style('classic-theme-styles');
// }, 100);

/* ---------------------------------------------------------------
 * Menú principal: fallback si no hay menú configurado
 * --------------------------------------------------------------- */
function digitalu_default_menu() {
    ?>
    <ul id="main-menu" class="menu">
        <li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a></li>
        <li class="menu-item menu-item-has-children">
            <a href="#" aria-haspopup="true">Servicios</a>
            <ul class="sub-menu">
                <li class="menu-item"><a href="<?php echo esc_url(home_url('/paginas-web/')); ?>">Páginas web</a></li>
                <li class="menu-item"><a href="<?php echo esc_url(home_url('/diseno-de-branding-e-identidad-visual-para-negocios/')); ?>">Branding e Identidad Visual</a></li>
                <li class="menu-item"><a href="<?php echo esc_url(home_url('/estrategias-en-redes-sociales/')); ?>">Estrategias en Redes Sociales</a></li>
                <li class="menu-item"><a href="<?php echo esc_url(home_url('/diseno-de-catalogos-y-presentaciones-comerciales/')); ?>">Catálogos y Presentaciones</a></li>
                <li class="menu-item"><a href="<?php echo esc_url(home_url('/software-a-medida/')); ?>">Software a medida</a></li>
            </ul>
        </li>
        <li class="menu-item"><a href="<?php echo esc_url(home_url('/casos-de-exito/')); ?>">Casos de éxito</a></li>
        <li class="menu-item"><a href="<?php echo esc_url(home_url('/contacto/')); ?>">Contacto</a></li>
    </ul>
    <?php
}

/* ---------------------------------------------------------------
 * URL de WhatsApp + teléfono (centralizado para reutilizar en plantillas)
 * --------------------------------------------------------------- */
function digitalu_wa_url($text = 'Hola, quiero información sobre sus servicios') {
    $phone = '522205614566';
    return 'https://wa.me/' . $phone . '?text=' . rawurlencode($text);
}

/* ---------------------------------------------------------------
 * Logo: si no hay custom-logo configurado, usa el de la mediateca
 * --------------------------------------------------------------- */
function digitalu_logo($size = 'header') {
    if (has_custom_logo()) {
        the_custom_logo();
        return;
    }
    // Fallback: URL de tu mediateca actual
    $url = home_url('/wp-content/uploads/2026/01/DigitalU_color-300x100.webp');
    $alt = get_bloginfo('name');
    $h   = ($size === 'footer') ? 60 : 44;
    printf(
        '<a href="%1$s" class="brand-link" rel="home"><img src="%2$s" alt="%3$s" height="%4$d" width="auto"></a>',
        esc_url(home_url('/')),
        esc_url($url),
        esc_attr($alt),
        $h
    );
}

/* ---------------------------------------------------------------
 * Permite los bloques HTML personalizados sin restricciones (para usuarios admin)
 * --------------------------------------------------------------- */
add_filter('wp_kses_allowed_html', function ($allowed, $context) {
    if ($context !== 'post') return $allowed;
    // No alteramos nada por defecto; solo dejamos disponibles los tags estándar.
    return $allowed;
}, 10, 2);
